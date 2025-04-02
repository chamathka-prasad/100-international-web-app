<?php
/**
 * Simple Forms Configuration File
 *
 * @link http://weblucas.info/
 *
 * @package simpleforms
 */

/***********************************************************************************
 * Fixme: DEFAULT MAILING SETTINGS
 *
 * customize your mailing options,
 * do not remove any option line!
 ***********************************************************************************/

// Required, receiver email address
define('YOUR_EMAIL', "your-email@gmail.com");

// Required, email subject
define('EMAILS_SUBJECT', "New Form Submission");

// Required, your company/brand name
define('COMPANY_NAME', "Simple Forms");

// enable auto responder
define('ENABLE_AUTO_RESPONDER', true);

// Auto responder email subject
define('AUTO_RESPONDER_EMAILS_SUBJECT', "Your submission received!");

// not required, comma separated emails: myemail@gmail.com, myemail2@gmail.com
define('SEND_COPY_TO', "");

// not required, reply to email address
define('REPLY_TO', "");



/*************************************************************************************
 * SECURE SSL/TLS CONNECTION SETTINGS (* required if SMTP_AUTHENTICATION = true)
 *
 * Use SECURE CONNECTION to prevent emails to be dropped in SPAM folder
 * or/if your server/hosting does not support other mailing options
 *
 * If SMTP_AUTHENTICATION set to true please provide SMTP SETTINGS bellow
 * see docs for more info (Back-end Configuration): https://weblucas.info/projects/simple-forms/simple-forms/help/
 ************************************************************************************/

// possible values: true | false
define('SMTP_AUTHENTICATION', false);

$SMTP_SETTINGS = [
    "SMTP_HOST"     => "mail.hostname.com",
    "SMTP_USER"     => "user@domain.com",
    "SMTP_PASSWORD" => "***************",
    "SMTP_SECURE"   => "ssl", // possible values: ssl | tls
    "SMTP_PORT"     => 465,
    "SMTP_DEBUG"    => 0      // show errors description if connection failed, possible values: 0 | 1
];



/*************************************************************************************
 * GOOGLE RECAPTCHA (ANTI SPAM) SETTINGS
 *
 * Generate your keys here: https://www.google.com/recaptcha/admin/create
 ************************************************************************************/

// possible values: true | false
define('USE_RECAPTCHA', false);

// recaptcha version 3 SECRET_KEY (Required if USE_RECAPTCHA set to true)
define("RECAPTCHA_V3_SECRET_KEY", "");



/*************************************************************************************
 * FILES SETTINGS
 *
 * Choose to delete or keep uploaded files on your hosting after receiving emails
 * deleted files from your hosting will be available on your email only.
 ************************************************************************************/

// possible values: true | false
define("DELETE_FILES_AFTER_MAIL", true);