{*<!--
/*+***********************************************************************************************************************************
 * The contents of this file are subject to the YetiForce Public License Version 1.1 (the "License"); you may not use this file except
 * in compliance with the License.
 * Software distributed under the License is distributed on an "AS IS" basis, WITHOUT WARRANTY OF ANY KIND, either express or implied.
 * See the License for the specific language governing rights and limitations under the License.
 * The Original Code is YetiForce.
 * The Initial Developer of the Original Code is YetiForce. Portions created by YetiForce are Copyright (C) www.yetiforce.com. 
 * All Rights Reserved.
 *************************************************************************************************************************************/
-->*}
{strip}
{if !$NOLOADLIBS}
	{include file="modules/Vtiger/Header.tpl"}
{/if}
<div class="SendEmailFormStep2" id="emailPreview" name="emailPreview">
	<br>
	<div class="well-large zeroPaddingAndMargin">
		<div class="modal-header blockHeader emailPreviewHeader" style="height:30px">
			<h3 class='span4'>{vtranslate('emailPreviewHeader','OSSMailView')}</h3>
			<div class='pull-right'>
				<span class="btn-toolbar" >
					<span class="btn-group">
						<a class="btn" href="index.php?module=OSSMail&view=compose&id={$RECORD_MODEL->getId()}&type=replyAll">
							<img width="14px" src="layouts/vlayout/modules/OSSMailView/previewReplyAll.png">&nbsp;&nbsp;
							<strong>{vtranslate('LBL_REPLYALLL','OSSMailView')}</strong>
						</a>
					</span>
					<span class="btn-group">
						<a class="btn" href="index.php?module=OSSMail&view=compose&id={$RECORD_MODEL->getId()}&type=reply">
							<img width="14px" src="layouts/vlayout/modules/OSSMailView/previewReply.png" >&nbsp;&nbsp;
							<strong>{vtranslate('LBL_REPLY','OSSMailView')}</strong>
						</a>
					</span>
					<span class="btn-group">
						<a class="btn" href="index.php?module=OSSMail&view=compose&id={$RECORD_MODEL->getId()}&type=forward">
							<i class="icon-share-alt"></i>&nbsp;&nbsp;
							<strong>{vtranslate('LBL_FORWARD','OSSMailView')}</strong>
						</a>
					</span>
					<span class="btn-group">
                         <button id="previewPrint" onclick="printMail();" type="button" name="previewPrint" class="btn" data-mode="previewPrint">
							<i class="icon-print"></i>&nbsp;&nbsp;
							<strong>{vtranslate('LBL_PRINT','OSSMailView')}</strong>
						</button>
					</span>
				</span>
			</div>
		</div>
		<form class="form-horizontal emailPreview" style="overflow: overlay;">
			<div class="row-fluid padding-bottom1per">
				<span class="span12 row-fluid">
					<span class="span2">
						<span class="pull-right muted">{vtranslate('From',$MODULENAME)}</span>
					</span>
					<span class="span9">
						<span id="emailPreview_From" class="row-fluid">{$FROM}</span>
					</span>
				</span>
			</div>
			<div class="row-fluid padding-bottom1per">
				<span class="span12 row-fluid">
					<span class="span2">
						<span class="pull-right muted">{vtranslate('To',$MODULENAME)}</span>
					</span>
					<span class="span9">
						<span id="emailPreview_To" class="row-fluid">{assign var=TO_EMAILS value=","|implode:$TO}{$TO_EMAILS}</span>
					</span>
				</span>
			</div>
			{if !empty($CC)}
			<div class="row-fluid padding-bottom1per">
				<span class="span12 row-fluid">
					<span class="span2">
						<span class="pull-right muted">{vtranslate('CC',$MODULENAME)}</span>
					</span>
					<span class="span9">
						<span id="emailPreview_Cc" class="row-fluid">
							{$CC}
						</span>
					</span>
				</span>
			</div>
			{/if}
			{if !empty($BCC)}
			<div class="row-fluid padding-bottom1per">
				<span class="span12 row-fluid">
					<span class="span2">
						<span class="pull-right muted">{vtranslate('BCC',$MODULENAME)}</span>
					</span>
					<span class="span9">
						<span id="emailPreview_Bcc" class="row-fluid">
							{$BCC}
						</span>
					</span>
				</span>
			</div>
			{/if}
			<div class="row-fluid padding-bottom1per">
				<span class="span12 row-fluid">
					<span class="span2">
						<span class="pull-right muted">{vtranslate('Subject',$MODULENAME)}</span>
					</span>
					<span class="span9">
						<span id="emailPreview_Subject" class="row-fluid">
							{$SUBJECT}
						</span>
					</span>
				</span>
			</div>
			{if !empty($ATTACHMENTS)}
			<div class="row-fluid padding-bottom1per">
				<span class="span12 row-fluid">
					<span class="span2">
						<span class="pull-right muted">{vtranslate('Attachments_Exist',$MODULENAME)}</span>
					</span>
					<span class="span9">
						<span id="emailPreview_attachment" class="row-fluid">
							{foreach item=ATTACHMENT from=$ATTACHMENTS}
                                <a &nbsp;
                                {if array_key_exists('docid',$ATTACHMENT)}
                                    &nbsp; href="index.php?module=Documents&action=DownloadFile&record={$ATTACHMENT['docid']}
                                            &fileid={$ATTACHMENT['id']}"
                                {else}
                                    &nbsp; href="index.php?module=Emails&action=DownloadFile&attachment_id={$ATTACHMENT['id']}"
                                {/if}
								>{$ATTACHMENT['file']}</a>&nbsp;&nbsp;
							{/foreach}
						</span>
					</span>
				</span>
			</div>
			{/if}
			<div class="row-fluid padding-bottom1per content">
				<span class="span12 row-fluid">
					<span class="span2">
						<span class="pull-right muted">{vtranslate('Content',$MODULENAME)}</span>
					</span>
					<span class="span10">
						<iframe id="emailPreview_Content" style="width: 100%;height: 600px;" src="{$URL}" frameborder="0"></iframe>
					</span>
				</span>
			</div>
			<div class="row-fluid">
				<span class="span1">&nbsp;</span>
				<span class="span10 margin0px"><hr/></span>
			</div>
			<div class="row-fluid">
				<span class="span4">&nbsp;</span>
				<span class="span4 textAlignCenter">
					<span class="muted">
						<small><em>{vtranslate('Sent',$MODULENAME)}</em></small>
                        <span><small><em>&nbsp;{$SENT}</em></small></span>
					</span>
				</span>
			</div>
			<div class="row-fluid">
				<span class="span3">&nbsp;</span>
				<span class="span5 textAlignCenter">
					<span><strong> {vtranslate('LBL_OWNER','Emails')} : {getOwnerName($OWNER)}</strong></span>
				</span>
			</div>
		</form>
	</div>
</div>
{if !$NOLOADLIBS}
	{include file='JSResources.tpl'|vtemplate_path}
{/if}
{/strip}
{literal}
<script>
var params = {};
$('#emailPreview_Content').css('height', document.documentElement.clientHeight - 295);
function printMail(){
    var content = window.open();
	$( ".emailPreview > div" ).each(function( index ) {
		if( $( this ).hasClass( 'content' ) ){
			var inframe = $( "#emailPreview_Content" ).contents();
			content.document.write( inframe. find('body'). html() +"<br>");
		}else{
			content.document.write( $.trim( $( this ).text() ) +"<br>");
		}
	});
    content.print();
}
</script>
{/literal}
