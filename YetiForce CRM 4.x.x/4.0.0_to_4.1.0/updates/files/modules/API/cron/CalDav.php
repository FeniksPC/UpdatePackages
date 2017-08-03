<?php
/**
 * CalDAV Cron Class
 * @package YetiForce.Cron
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
\App\Log::trace('Start cron CalDAV');
API_DAV_Model::runCronCalDav();
\App\Log::trace('End cron CalDAV');
