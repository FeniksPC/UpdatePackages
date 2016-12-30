<?php
namespace App;

/**
 * Mailer basic class
 * @package YetiForce.App
 * @license licenses/License.html
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
class Mailer
{

	/** @var string[] Queue status */
	public static $statuses = [
		0 => 'LBL_PENDING_ACCEPTANCE',
		1 => 'LBL_WAITING_TO_BE_SENT',
		2 => 'LBL_ERROR_DURING_SENDING',
	];
	public static $quoteJsonColumn = ['to', 'cc', 'bcc', 'attachments'];

	/** @var \PHPMailer PHPMailer instance */
	protected $mailer;

	/** @var array SMTP configuration */
	protected $smtp;

	/** @var array Error logs */
	protected $error;

	/**
	 * Construct
	 */
	public function __construct()
	{
		$this->mailer = new \PHPMailer();
		if (\AppConfig::debug('MAILER_DEBUG')) {
			$this->mailer->SMTPDebug = 2;
			$this->mailer->Debugoutput = function($str, $level) {
				if (strpos(strtolower($str), 'error') !== false || strpos(strtolower($str), 'failed') !== false) {
					Log::error(trim($str), 'Mailer');
				} else {
					Log::trace(trim($str), 'Mailer');
				}
			};
		}
		$this->mailer->XMailer = 'YetiForceCRM mailer';
		$this->mailer->Hostname = 'YetiForceCRM';
	}

	/**
	 * Load configuration smtp by id
	 * @param int $smtpId Smtp ID
	 * @return $this mailer object itself
	 */
	public function loadSmtpByID($smtpId)
	{
		$this->smtp = Mail::getSmtpById($smtpId);
		$this->setSmtp();
		return $this;
	}

	/**
	 * Load configuration smtp
	 * @param array $smtpInfo
	 * @return $this mailer object itself
	 */
	public function loadSmtp($smtpInfo)
	{
		$this->smtp = $smtpInfo;
		$this->setSmtp();
		return $this;
	}

	/**
	 * Add mail to quote for send
	 * @param array $params
	 */
	public static function addMail($params)
	{
		$params['status'] = \AppConfig::module('Mail', 'MAILER_REQUIRED_ACCEPTATION_BEFORE_SENDING') ? 0 : 1;
		if (empty($params['smtp_id'])) {
			$params['smtp_id'] = Mail::getDefaultSmtp();
		}
		if (empty($params['owner'])) {
			$params['owner'] = User::getCurrentUserRealId();
		}
		$params['date'] = date('Y-m-d H:i:s');
		foreach (static::$quoteJsonColumn as $key) {
			if (isset($params[$key])) {
				if (!is_array($params[$key])) {
					$params[$key] = [$params[$key]];
				}
				$params[$key] = Json::encode($params[$key]);
			}
		}
		\App\Db::getInstance('admin')->createCommand()->insert('s_#__mail_queue', $params)->execute();
	}

	/**
	 * Get configuration smtp
	 * @param string|bool $key
	 * @return array
	 */
	public function getSmtp($key = false)
	{
		if ($key && isset($this->smtp[$key])) {
			return $this->smtp[$key];
		}
		return $this->smtp;
	}

	/**
	 * Set configuration smtp in mailer
	 */
	public function setSmtp()
	{
		if (!$this->smtp) {
			throw new Exceptions\AppException('ERR_NO_SMTP_CONFIGURATION');
		}
		switch ($this->smtp['mailer_type']) {
			case 'smtp': $this->mailer->isSMTP();
				break;
			case 'sendmail': $this->mailer->isSendmail();
				break;
			case 'mail': $this->mailer->isMail();
				break;
			case 'qmail': $this->mailer->isQmail();
				break;
		}
		$this->mailer->Host = $this->smtp['host'];
		if (!empty($this->smtp['port'])) {
			$this->mailer->Port = $this->smtp['port'];
		}
		$this->mailer->SMTPSecure = $this->smtp['secure'];
		$this->mailer->SMTPAuth = (bool) $this->smtp['authentication'];
		$this->mailer->Username = $this->smtp['username'];
		$this->mailer->Password = $this->smtp['password'];
		if ($this->smtp['options']) {
			$this->mailer->SMTPOptions = $this->smtp['options'];
		}
		if ($this->smtp['from_email']) {
			$this->mailer->From = $this->smtp['from_email'];
		}
		if ($this->smtp['from_name']) {
			$this->mailer->FromName = $this->smtp['from_name'];
		}
		if ($this->smtp['replay_to']) {
			$this->mailer->addReplyTo($this->smtp['replay_to']);
		}
	}

	/**
	 * Set subject
	 * @param string $subject
	 * @return $this mailer object itself
	 */
	public function subject($subject)
	{
		$this->mailer->Subject = $subject;
		return $this;
	}

	/**
	 * Creates a message from an HTML string, making modifications for inline images and backgrounds and creates a plain-text version by converting the HTML
	 * @param text $message
	 * @see \PHPMailer::MsgHTML()
	 * @return $this mailer object itself
	 */
	public function content($message)
	{
		$this->mailer->msgHTML($message);
		return $this;
	}

	/**
	 * Set the From and FromName properties.
	 * @param string $address
	 * @param string $name
	 * @return $this mailer object itself
	 */
	public function from($address, $name = '')
	{
		$this->mailer->From = $address;
		$this->mailer->FromName = $name;
		return $this;
	}

	/**
	 * Add a "To" address.
	 * @param string $address The email address to send to
	 * @param string $name
	 * @return $this mailer object itself
	 */
	public function to($address, $name = '')
	{
		$this->mailer->addAddress($address, $name);
		return $this;
	}

	/**
	 * Add a "CC" address.
	 * @note: This function works with the SMTP mailer on win32, not with the "mail" mailer.
	 * @param string $address The email address to send to
	 * @param string $name
	 * @return $this mailer object itself
	 */
	public function cc($address, $name = '')
	{
		$this->mailer->addCC($address, $name);
		return $this;
	}

	/**
	 * Add a "BCC" address.
	 * @note: This function works with the SMTP mailer on win32, not with the "mail" mailer.
	 * @param string $address The email address to send to
	 * @param string $name
	 * @return $this mailer object itself
	 */
	public function bcc($address, $name = '')
	{
		$this->mailer->addBCC($address, $name);
		return $this;
	}

	/**
	 * Add a "Reply-To" address.
	 * @param string $address The email address to reply to
	 * @param string $name
	 * @return $this mailer object itself
	 */
	public function replyTo($address, $name = '')
	{
		$this->mailer->addReplyTo($address, $name);
		return $this;
	}

	/**
	 * Add an attachment from a path on the filesystem.
	 * @param string $path Path to the attachment.
	 * @param string $name Overrides the attachment name.
	 * @return $this mailer object itself
	 */
	public function attachment($path, $name = '')
	{
		$this->mailer->addAttachment($path, $name);
		return $this;
	}

	/**
	 * Create a message and send it.
	 * @return boolean
	 */
	public function send()
	{
		if ($this->mailer->FromName === 'Root User') {
			$this->mailer->FromName = \Vtiger_CompanyDetails_Model::getInstanceById()->get('organizationname');
		}
		if ($this->mailer->send()) {
			Log::trace('Mailer sent mail', 'Mailer');
			return true;
		} else {
			Log::error('Mailer Error: ' . $this->mailer->ErrorInfo, 'Mailer');
		}
		return false;
	}

	/**
	 * Check connection
	 * @return array
	 */
	public function test()
	{
		$this->mailer->SMTPDebug = 2;
		$this->mailer->Debugoutput = function($str, $level) {
			if (strpos(strtolower($str), 'error') !== false || strpos(strtolower($str), 'failed') !== false) {
				$this->error[] = trim($str);
				Log::error(trim($str), 'Mailer');
			} else {
				Log::trace(trim($str), 'Mailer');
			}
		};
		$currentUser = Users_Record_Model::getCurrentUserModel();
		$this->to($currentUser->get('email1'));
		$template = Mail::getTempleteDetail('TestMailAboutTheMailServerConfiguration');
		$this->subject($template['subject']);
		$this->content($template['content']);
		$result = $this->send();
		return ['result' => $result, 'error' => implode(PHP_EOL, $this->error)];
	}
}
