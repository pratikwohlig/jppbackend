<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Configuration file for Email library
 */

$config['protocol'] = 'smtp';
$config['smtp_port'] = 587;
$config['smtp_host'] = 'smtp.sendgrid.net';
$config['smtp_user'] = 'apikey';
$config['smtp_pass'] = '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';
$config['crlf']="\r\n";
$config['newline']="\r\n";
$config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;
$config['mailtype'] = 'html';