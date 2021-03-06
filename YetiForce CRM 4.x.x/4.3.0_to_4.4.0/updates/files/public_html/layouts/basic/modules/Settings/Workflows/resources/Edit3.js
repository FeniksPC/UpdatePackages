/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * Contributor(s): YetiForce.com
 *************************************************************************************/
Settings_Workflows_Edit_Js("Settings_Workflows_Edit3_Js", {}, {
	step3Container: false,
	advanceFilterInstance: false,
	ckEditorInstance: false,
	fieldValueMap: false,
	init: function () {
		this.initialize();
	},
	/**
	 * Function to get the container which holds all the reports step1 elements
	 * @return jQuery object
	 */
	getContainer: function () {
		return this.step3Container;
	},
	/**
	 * Function to set the reports step1 container
	 * @params : element - which represents the reports step1 container
	 * @return : current instance
	 */
	setContainer: function (element) {
		this.step3Container = element;
		return this;
	},
	/**
	 * Function  to intialize the reports step1
	 */
	initialize: function (container) {
		if (typeof container === "undefined") {
			container = $('#workflow_step3');
		}
		if (container.is('#workflow_step3')) {
			this.setContainer(container);
		} else {
			this.setContainer($('#workflow_step3'));
		}
	},
	registerEditTaskEvent: function () {
		let thisInstance = this,
			container = this.getContainer();
		container.on('click', '[data-url]', function (e) {
			let currentElement = $(e.currentTarget),
				params = currentElement.data('url'),
				progressIndicatorElement = $.progressIndicator({
					position: 'html',
					blockInfo: {
						enabled: true
					}
				});
			app.showModalWindow(null, params, function (data) {
				progressIndicatorElement.progressIndicator({'mode': 'hide'});
				if (data) {
					let clipboard = App.Fields.Text.registerCopyClipboard(data);
					container.one('hidden.bs.modal', () => {
						clipboard.destroy();
					});
				}
				thisInstance.registerVTCreateTodoTaskEvents();
				var taskType = $('#taskType').val();
				var functionName = 'register' + taskType + 'Events';
				if (typeof thisInstance[functionName] !== "undefined") {
					thisInstance[functionName].apply(thisInstance);
				}
				thisInstance.registerSaveTaskSubmitEvent(taskType);
				$('#saveTask').validationEngine(app.validationEngineOptions);
				thisInstance.registerFillTaskFieldsEvent();
				thisInstance.registerCheckSelectDateEvent();
				app.showPopoverElementView($(data).find('.js-popover-tooltip'));
				var contentHeight = parseInt(data.find('.modal-body').height());
				var maxHeight = app.getScreenHeight(80);
				if ((contentHeight) > maxHeight) {
					app.showScrollBar(data.find('.modal-body'), {
						'height': maxHeight + 'px'
					});
				}
			});

		});
	},
	registerCheckSelectDateEvent: function () {
		$('[name="check_select_date"]').on('change', function (e) {
			if ($(e.currentTarget).is(':checked')) {
				$('#checkSelectDateContainer').removeClass('d-none').addClass('show');
			} else {
				$('#checkSelectDateContainer').removeClass('show').addClass('d-none');
			}
		});
	},
	registerSaveTaskSubmitEvent: function (taskType) {
		var thisInstance = this;
		$('#saveTask').on('submit', function (e) {
			var form = $(e.currentTarget);
			var validationResult = form.validationEngine('validate');
			if (validationResult == true) {
				var customValidationFunctionName = taskType + 'CustomValidation';
				if (typeof thisInstance[customValidationFunctionName] !== "undefined") {
					var result = thisInstance[customValidationFunctionName].apply(thisInstance);
					if (result != true) {
						var params = {
							title: app.vtranslate('JS_MESSAGE'),
							text: result,
							type: 'error'
						}
						Vtiger_Helper_Js.showPnotify(params);
						e.preventDefault();
						return;
					}
				}
				var preSaveActionFunctionName = 'preSave' + taskType;
				if (typeof thisInstance[preSaveActionFunctionName] !== "undefined") {
					thisInstance[preSaveActionFunctionName].apply(thisInstance, [taskType]);
				}
				var params = form.serializeFormData();
				AppConnector.request(params).done(function (data) {
					if (data.result) {
						thisInstance.getTaskList();
						app.hideModalWindow();
					}
				});
			}
			e.preventDefault();
		})
	},
	VTUpdateFieldsTaskCustomValidation: function () {
		return this.checkDuplicateFieldsSelected();
	},
	VTCreateEntityTaskCustomValidation: function () {
		return this.checkDuplicateFieldsSelected();
	},
	checkDuplicateFieldsSelected: function () {
		var selectedFieldNames = $('#save_fieldvaluemapping').find('.js-conditions-row').find('[name="fieldname"]');
		var result = true;
		var failureMessage = app.vtranslate('JS_SAME_FIELDS_SELECTED_MORE_THAN_ONCE');
		$.each(selectedFieldNames, function (i, ele) {
			var fieldName = $(ele).attr("value");
			var fields = $("[name=" + fieldName + "]").not(':hidden');
			if (fields.length > 1) {
				result = failureMessage;
				return false;
			}
		});
		return result;
	},
	preSaveVTUpdateFieldsTask: function (tasktype) {
		var values = this.getValues(tasktype);
		$('[name="field_value_mapping"]').val(JSON.stringify(values));
	},
	preSaveVTCreateEntityTask: function (tasktype) {
		var values = this.getValues(tasktype);
		$('[name="field_value_mapping"]').val(JSON.stringify(values));
	},
	preSaveVTEmailTask: function (tasktype) {
		var textAreaElement = $('#content');
		//To keep the plain text value to the textarea which need to be
		//sent to server
		textAreaElement.val(CKEDITOR.instances['content'].getData());
	},
	preSaveVTUpdateRelatedFieldTask: function (tasktype) {
		var values = this.getValues(tasktype);
		$('[name="field_value_mapping"]').val(JSON.stringify(values));
	},
	/**
	 * Function to check if the field selected is empty field
	 * @params : select element which represents the field
	 * @return : boolean true/false
	 */
	isEmptyFieldSelected: function (fieldSelect) {
		var selectedOption = fieldSelect.find('option:selected');
		//assumption that empty field will be having value none
		if (selectedOption.val() == 'none') {
			return true;
		}
		return false;
	},
	getVTCreateEntityTaskFieldList: function () {
		return new Array('fieldname', 'value', 'valuetype', 'modulename');
	},
	getVTUpdateFieldsTaskFieldList: function () {
		return new Array('fieldname', 'value', 'valuetype');
	},
	getVTUpdateRelatedFieldTaskFieldList: function () {
		return new Array('fieldname', 'value', 'valuetype');
	},
	getValues: function (tasktype) {
		var thisInstance = this;
		var conditionsContainer = $('#save_fieldvaluemapping');
		var fieldListFunctionName = 'get' + tasktype + 'FieldList';
		if (typeof thisInstance[fieldListFunctionName] !== "undefined") {
			var fieldList = thisInstance[fieldListFunctionName].apply()
		}

		var values = [];
		var conditions = $('.js-conditions-row', conditionsContainer);
		conditions.each(function (i, conditionDomElement) {
			var rowElement = $(conditionDomElement);
			var fieldSelectElement = $('[name="fieldname"]', rowElement);
			var valueSelectElement = $('[data-value="value"]', rowElement);
			//To not send empty fields to server
			if (thisInstance.isEmptyFieldSelected(fieldSelectElement)) {
				return true;
			}
			var fieldDataInfo = fieldSelectElement.find('option:selected').data('fieldinfo');
			var fieldType = fieldDataInfo.type;
			var rowValues = {};
			if (fieldType == 'owner') {
				for (var key in fieldList) {
					var field = fieldList[key];
					if (field == 'value' && valueSelectElement.is('select')) {
						rowValues[field] = valueSelectElement.find('option:selected').val();
					} else {
						rowValues[field] = $('[name="' + field + '"]', rowElement).val();
					}
				}
			} else if (fieldType == 'picklist' || fieldType == 'multipicklist') {
				for (var key in fieldList) {
					var field = fieldList[key];
					if (field == 'value' && valueSelectElement.is('input')) {
						var commaSeperatedValues = valueSelectElement.val();
						var pickListValues = valueSelectElement.data('picklistvalues');
						var valuesArr = commaSeperatedValues.split(',');
						var newvaluesArr = [];
						for (i = 0; i < valuesArr.length; i++) {
							if (typeof pickListValues[valuesArr[i]] !== "undefined") {
								newvaluesArr.push(pickListValues[valuesArr[i]]);
							} else {
								newvaluesArr.push(valuesArr[i]);
							}
						}
						var reconstructedCommaSeperatedValues = newvaluesArr.join(',');
						rowValues[field] = reconstructedCommaSeperatedValues;
					} else if (field == 'value' && valueSelectElement.is('select') && fieldType == 'picklist') {
						rowValues[field] = valueSelectElement.val();
					} else if (field == 'value' && valueSelectElement.is('select') && fieldType == 'multipicklist') {
						var value = valueSelectElement.val();
						if (value == null) {
							rowValues[field] = value;
						} else {
							rowValues[field] = value.join(',');
						}
					} else {
						rowValues[field] = $('[name="' + field + '"]', rowElement).val();
					}
				}

			} else {
				for (var key in fieldList) {
					var field = fieldList[key];
					if (field == 'value') {
						rowValues[field] = valueSelectElement.val();
					} else {
						rowValues[field] = $('[name="' + field + '"]', rowElement).val();
					}
				}
			}
			if ($('[name="valuetype"]', rowElement).val() == 'false' || ($('[name="valuetype"]', rowElement).length == 0)) {
				rowValues['valuetype'] = 'rawtext';
			}

			values.push(rowValues);
		});
		return values;
	},
	getTaskList: function () {
		var container = this.getContainer();
		var params = {
			module: app.getModuleName(),
			parent: app.getParentModuleName(),
			view: 'TasksList',
			record: $('[name="record"]', container).val()
		}
		var progressIndicatorElement = $.progressIndicator({
			'position': 'html',
			'blockInfo': {
				'enabled': true
			}
		});
		AppConnector.request(params).done(function (data) {
			$('#taskListContainer').html(data);
			progressIndicatorElement.progressIndicator({mode: 'hide'});
		});
	},
	/**
	 * Function to get ckEditorInstance
	 */
	getckEditorInstance: function () {
		if (this.ckEditorInstance === false) {
			this.ckEditorInstance = new App.Fields.Text.Editor();
		}
		return this.ckEditorInstance;
	},
	registerTaskStatusChangeEvent: function () {
		var container = this.getContainer();
		container.on('change', '.taskStatus', function (e) {
			var currentStatusElement = $(e.currentTarget);
			var url = currentStatusElement.data('statusurl');
			if (currentStatusElement.is(':checked')) {
				url = url + '&status=true';
			} else {
				url = url + '&status=false';
			}
			var progressIndicatorElement = $.progressIndicator({
				'position': 'html',
				'blockInfo': {
					'enabled': true
				}
			});
			AppConnector.request(url).done(function (data) {
				if (data.result == "ok") {
					var params = {
						title: app.vtranslate('JS_MESSAGE'),
						text: app.vtranslate('JS_STATUS_CHANGED_SUCCESSFULLY'),
						type: 'success'
					};
					Vtiger_Helper_Js.showPnotify(params);
				}
				progressIndicatorElement.progressIndicator({mode: 'hide'});
			});
			e.stopImmediatePropagation();
		});
	},
	registerTaskDeleteEvent: function () {
		var thisInstance = this;
		var container = this.getContainer();
		container.on('click', '.deleteTask', function (e) {
			var message = app.vtranslate('LBL_DELETE_CONFIRMATION');
			Vtiger_Helper_Js.showConfirmationBox({
				'message': message
			}).done(function () {
				var currentElement = $(e.currentTarget);
				var deleteUrl = currentElement.data('deleteurl');
				AppConnector.request(deleteUrl).done(function (data) {
					if (data.result == 'ok') {
						thisInstance.getTaskList();
						var params = {
							title: app.vtranslate('JS_MESSAGE'),
							text: app.vtranslate('JS_TASK_DELETED_SUCCESSFULLY'),
							type: 'success'
						};
						Vtiger_Helper_Js.showPnotify(params);
					}
				});
			});
		});
	},
	registerFillTaskFromEmailFieldEvent: function () {
		$('#saveTask').on('change', '#fromEmailOption', function (e) {
			var currentElement = $(e.currentTarget);
			var inputElement = currentElement.closest('.row').find('.fields');
			inputElement.val(currentElement.val());
		})
	},
	registerFillTaskFieldsEvent: function () {
		$('#saveTask').on('change', '.task-fields', function (e) {
			var currentElement = $(e.currentTarget);
			var inputElement = currentElement.closest('.row').find('.fields');
			var oldValue = inputElement.val();
			var newValue = oldValue + currentElement.val();
			inputElement.val(newValue);
		})
	},
	registerFillMailContentEvent: function () {
		$('#task-fieldnames,#task_timefields,#task-templates').on('change', function (e) {
			var textarea = CKEDITOR.instances.content;
			var value = $(e.currentTarget).val();
			if (textarea != undefined) {
				textarea.insertHtml(value);
			} else if ($('textarea[name="content"]')) {
				var textArea = $('textarea[name="content"]');
				textArea.insertAtCaret(value);
			}
		});
	},
	registerVTEmailTaskEvents: function () {
		var textAreaElement = $('#content');
		var ckEditorInstance = this.getckEditorInstance();
		ckEditorInstance.loadEditor(textAreaElement);
		this.registerFillMailContentEvent();
		this.registerFillTaskFromEmailFieldEvent();
		this.registerCcAndBccEvents();
	},
	registerVTCreateTodoTaskEvents: function () {
		app.registerEventForClockPicker();
	},
	registerVTUpdateFieldsTaskEvents: function () {
		var thisInstance = this;
		this.registerAddFieldEvent();
		this.registerDeleteConditionEvent();
		this.registerFieldChange();
		this.fieldValueMap = false;
		if ($('#fieldValueMapping').val() != '') {
			this.fieldValueReMapping();
		}
		var fields = $('#save_fieldvaluemapping').find('select[name="fieldname"]');
		$.each(fields, function (i, field) {
			thisInstance.loadFieldSpecificUi($(field));
		});
		this.getPopUp($('#saveTask'));
	},
	registerVTUpdateRelatedFieldTaskEvents: function () {
		var thisInstance = this;
		this.registerAddFieldEvent();
		this.registerDeleteConditionEvent();
		this.registerFieldChange();
		this.fieldValueMap = false;
		if ($('#fieldValueMapping').val() != '') {
			this.fieldValueReMapping();
		}
		var fields = $('#save_fieldvaluemapping').find('select[name="fieldname"]');
		$.each(fields, function (i, field) {
			thisInstance.loadFieldSpecificUi($(field));
		});
		this.getPopUp($('#saveTask'));
	},
	registerAddFieldEvent: function () {
		$('#addFieldBtn').on('click', function (e) {
			var newAddFieldContainer = $('.js-add-basic-field-container').clone(true, true).removeClass('js-add-basic-field-container d-none').addClass('js-conditions-row');
			$('select', newAddFieldContainer).addClass('select2');
			$('#save_fieldvaluemapping').append(newAddFieldContainer);
			//change in to chosen elements
			App.Fields.Picklist.changeSelectElementView(newAddFieldContainer);
		});
	},
	registerDeleteConditionEvent: function () {
		$('#saveTask').on('click', '.deleteCondition', function (e) {
			$(e.currentTarget).closest('.js-conditions-row').remove();
		})
	},
	/**
	 * Function which will register field change event
	 */
	registerFieldChange: function () {
		var thisInstance = this;
		$('#saveTask').on('change', 'select[name="fieldname"]', function (e) {
			var selectedElement = $(e.currentTarget);
			if (selectedElement.val() != 'none') {
				var conditionRow = selectedElement.closest('.js-conditions-row');
				var moduleNameElement = conditionRow.find('[name="modulename"]');
				if (moduleNameElement.length > 0) {
					var selectedOptionFieldInfo = selectedElement.find('option:selected').data('fieldinfo');
					var type = selectedOptionFieldInfo.type;
					if (type == 'picklist' || type == 'multipicklist') {
						var selectElement = $('select.createEntityModule:not(:disabled)');
						var moduleName = selectElement.val();
						moduleNameElement.val(moduleName).change().prop('disabled', true);
					}
				}
				thisInstance.loadFieldSpecificUi(selectedElement);
			}
		});
	},
	getModuleName: function () {
		return app.getModuleName();
	},
	getFieldValueMapping: function () {
		var fieldValueMap = this.fieldValueMap;
		if (fieldValueMap != false) {
			return fieldValueMap;
		} else {
			return '';
		}
	},
	fieldValueReMapping: function () {
		var object = JSON.parse($('#fieldValueMapping').val());
		var fieldValueReMap = {};

		$.each(object, function (i, array) {
			fieldValueReMap[array.fieldname] = {};
			var values = {}
			$.each(array, function (key, value) {
				values[key] = value;
			});
			fieldValueReMap[array.fieldname] = values
		});
		this.fieldValueMap = fieldValueReMap;
	},
	loadFieldSpecificUi: function (fieldSelect) {
		var selectedOption = fieldSelect.find('option:selected');
		var row = fieldSelect.closest('div.js-conditions-row');
		var fieldUiHolder = row.find('.fieldUiHolder');
		var fieldInfo = selectedOption.data('fieldinfo');
		var fieldValueMapping = this.getFieldValueMapping();
		var selectField = '';
		if (fieldValueMapping && typeof fieldValueMapping[fieldInfo.name] !== "undefined") {
			selectField = fieldValueMapping[fieldInfo.name];
		} else if (fieldValueMapping && typeof fieldValueMapping[fieldSelect.val()] !== "undefined") {
			selectField = fieldValueMapping[fieldSelect.val()];
		}
		if (selectField) {
			fieldInfo.value = selectField['value'];
			fieldInfo.workflow_valuetype = selectField['valuetype'];
		} else {
			fieldInfo.workflow_valuetype = 'rawtext';
		}
		var moduleName = this.getModuleName();

		var fieldModel = Vtiger_Field_Js.getInstance(fieldInfo, moduleName);
		this.fieldModelInstance = fieldModel;
		var fieldSpecificUi = this.getFieldSpecificUi(fieldSelect);
		//remove validation since we dont need validations for all eleements
		// Both filter and find is used since we dont know whether the element is enclosed in some conainer like currency
		var fieldName = fieldModel.getName();
		if (fieldModel.getType() == 'multipicklist') {
			fieldName = fieldName + "[]";
		}
		fieldSpecificUi.filter('[name="' + fieldName + '"]').attr('data-value', 'value');
		fieldSpecificUi.find('[name="' + fieldName + '"]').attr('data-value', 'value');
		fieldSpecificUi.filter('[name="valuetype"]').removeAttr('data-validation-engine');
		fieldSpecificUi.find('[name="valuetype"]').removeAttr('data-validation-engine');
		//If the workflowValueType is rawtext then only validation should happen
		var workflowValueType = fieldSpecificUi.filter('[name="valuetype"]').val();
		if (workflowValueType != 'rawtext' && typeof workflowValueType !== "undefined") {
			fieldSpecificUi.filter('[name="' + fieldName + '"]').removeAttr('data-validation-engine');
			fieldSpecificUi.find('[name="' + fieldName + '"]').removeAttr('data-validation-engine');
		}
		fieldUiHolder.html(fieldSpecificUi);
		if (fieldSpecificUi.is('input.select2')) {
			var tagElements = fieldSpecificUi.data('tags');
			var params = {tags: tagElements, tokenSeparators: [","]}
			App.Fields.Picklist.showSelect2ElementView(fieldSpecificUi, params)
		} else if (fieldSpecificUi.is('select')) {
			if (fieldSpecificUi.hasClass('chzn-select')) {
				App.Fields.Picklist.showChoosenElementView(fieldSpecificUi);
			} else {
				App.Fields.Picklist.showSelect2ElementView(fieldSpecificUi);
			}
		} else if (fieldSpecificUi.is('input.dateField')) {
			App.Fields.Date.register(fieldSpecificUi);
		} else if (fieldSpecificUi.is('input.dateRangeField')) {
			App.Fields.Date.registerRange(fieldSpecificUi, {ranges: false});
		}
		return this;
	},
	/**
	 * Functiont to get the field specific ui for the selected field
	 * @prarms : fieldSelectElement - select element which will represents field list
	 * @return : jquery object which represents the ui for the field
	 */
	getFieldSpecificUi: function (fieldSelectElement) {
		var fieldModel = this.fieldModelInstance;
		return $(fieldModel.getUiTypeSpecificHtml())
	},
	registerVTCreateEventTaskEvents: function () {
		app.registerEventForClockPicker();
	},
	registerVTCreateEntityTaskEvents: function () {
		this.registerChangeCreateEntityEvent();
		this.registerVTUpdateFieldsTaskEvents();
	},
	registerChangeCreateEntityEvent: function () {
		var thisInstance = this;
		$('[name="mappingPanel"]').on('change', function (e) {
			var currentTarget = $(e.currentTarget);
			app.setMainParams('mappingPanel', currentTarget.val())
			$('#addCreateEntityContainer').html('');
			var hideElementByClass = $('.' + currentTarget.data('hide'));
			var showElementByClass = $('.' + currentTarget.data('show'));
			var taskFields = app.getMainParams('taskFields', true);
			hideElementByClass.addClass('d-none').find('input,select').each(function (e, n) {
				var element = $(this);
				var name = element.attr('name');
				if ($.inArray(name, taskFields) >= 0) {
					if (element.is('select')) {
						element.val('').trigger('chosen:updated').change();
					}
					element.prop('disabled', true);
				}
			});
			showElementByClass.removeClass('d-none').find('input,select').each(function (e, n) {
				var element = $(this);
				var name = element.attr('name');
				if ($.inArray(name, taskFields) >= 0) {
					element.prop('disabled', false);
					if (element.is('select')) {
						element.val('').trigger('chosen:updated').change();
					}
				}
			});
		});
		$('.createEntityModule').on('change', function (e) {
			var params = {
				module: app.getModuleName(),
				parent: app.getParentModuleName(),
				view: 'CreateEntity',
				for_workflow: $('[name="for_workflow"]').val(),
				mappingPanel: app.getMainParams('mappingPanel')
			}
			var relatedModule = $(e.currentTarget).val();
			if (relatedModule) {
				params['relatedModule'] = relatedModule;
			}
			var progressIndicatorElement = $.progressIndicator({
				position: 'html',
				blockInfo: {
					enabled: true
				}
			});
			AppConnector.request(params).done(function (data) {
				progressIndicatorElement.progressIndicator({'mode': 'hide'})
				var createEntityContainer = $('#addCreateEntityContainer');
				createEntityContainer.html(data);
				App.Fields.Picklist.changeSelectElementView(createEntityContainer);
				App.Fields.Picklist.showSelect2ElementView(createEntityContainer.find('.select2'));
				thisInstance.registerAddFieldEvent();
				thisInstance.fieldValueMap = false;
				if ($('#fieldValueMapping').val() != '') {
					this.fieldValueReMapping();
				}
				var fields = $('#save_fieldvaluemapping').find('select[name="fieldname"]');
				$.each(fields, function (i, field) {
					thisInstance.loadFieldSpecificUi($(field));
				});
			});
		});
	},
	/**
	 * Function which will change the UI styles based on recurring type
	 * @params - recurringType - which recurringtype is selected
	 */
	changeRecurringTypesUIStyles: function (recurringType) {
		var thisInstance = this;
		if (recurringType == 'Daily' || recurringType == 'Yearly') {
			$('#repeatWeekUI').removeClass('show').addClass('d-none');
			$('#repeatMonthUI').removeClass('show').addClass('d-none');
		} else if (recurringType == 'Weekly') {
			$('#repeatWeekUI').removeClass('d-none').addClass('show');
			$('#repeatMonthUI').removeClass('show').addClass('d-none');
		} else if (recurringType == 'Monthly') {
			$('#repeatWeekUI').removeClass('show').addClass('d-none');
			$('#repeatMonthUI').removeClass('d-none').addClass('show');
		}
	},
	checkHiddenStatusofCcandBcc: function () {
		var ccLink = $('#ccLink');
		var bccLink = $('#bccLink');
		if (ccLink.hasClass('d-none') && bccLink.hasClass('d-none')) {
			ccLink.closest('div.row').addClass('d-none');
		}
	},
	/*
	 * Function to register the events for bcc and cc links
	 */
	registerCcAndBccEvents: function () {
		var thisInstance = this;
		$('#ccLink').on('click', function (e) {
			var ccContainer = $('#ccContainer');
			ccContainer.removeClass('d-none');
			var taskFieldElement = ccContainer.find('select.task-fields');
			taskFieldElement.addClass('chzn-select');
			App.Fields.Picklist.changeSelectElementView(taskFieldElement);
			$(e.currentTarget).addClass('d-none');
			thisInstance.checkHiddenStatusofCcandBcc();
		});
		$('#bccLink').on('click', function (e) {
			var bccContainer = $('#bccContainer');
			bccContainer.removeClass('d-none');
			var taskFieldElement = bccContainer.find('select.task-fields');
			taskFieldElement.addClass('chzn-select');
			App.Fields.Picklist.changeSelectElementView(taskFieldElement);
			$(e.currentTarget).addClass('d-none');
			thisInstance.checkHiddenStatusofCcandBcc();
		});
	},
	registerEvents: function () {
		var container = this.getContainer();
		App.Fields.Picklist.changeSelectElementView(container);
		this.registerEditTaskEvent();
		this.registerTaskStatusChangeEvent();
		this.registerTaskDeleteEvent();
	}
});

//http://stackoverflow.com/questions/946534/insert-text-into-textarea-with-jquery
$.fn.extend({
	insertAtCaret: function (myValue) {
		return this.each(function (i) {
			if (document.selection) {
				//For browsers like Internet Explorer
				this.focus();
				var sel = document.selection.createRange();
				sel.text = myValue;
				this.focus();
			} else if (this.selectionStart || this.selectionStart == '0') {
				//For browsers like Firefox and Webkit based
				var startPos = this.selectionStart;
				var endPos = this.selectionEnd;
				var scrollTop = this.scrollTop;
				this.value = this.value.substring(0, startPos) + myValue + this.value.substring(endPos, this.value.length);
				this.focus();
				this.selectionStart = startPos + myValue.length;
				this.selectionEnd = startPos + myValue.length;
				this.scrollTop = scrollTop;
			} else {
				this.value += myValue;
				this.focus();
			}
		});
	}
});
