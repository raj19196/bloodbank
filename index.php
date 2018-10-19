<?php
error_reporting(E_ALL);
// Code for Twilio Support Document: https://support.twilio.com/hc/en-us/articles/223134267-Building-an-SMS-Keyword-Response-Application
// Get the PHP helper library from twilio.com/docs/php/install
require __DIR__ . '/vendor/autoload.php'; // Loads the library. This may vary depending on how you installed the library.
use Twilio\Rest\Client;

/*
** Your Account Sid and Auth Token from twilio.com/user/account
*/
$sid = "AC4d23ac0e8a3a4b478da03182d9b0615d";
$token = "94157f81e1c0a8400a9be02310bc4b79";
$client = new Client($sid, $token);

/*

$body = $_REQUEST['Body'];
$to = $_REQUEST['From'];
$from = $_REQUEST['To'];
if( (stripos($body, 'B+' )!== FALSE) && (stripos($body, 'jersey' )!== FALSE)){

$message = 'contact _ Name B+';
}
else if(  (stripos($body, 'A+' )!== FALSE) && (stripos($body, 'jersey' )!== FALSE){

$message = '"Not Avail.';
}
else
{
	$message = 'Invalid.';
}*/
$message = 'Invalid.';
$client->messages->create(
        "+14128807092",
        array(
            'from' => "+18782189688",,
            'body' => $message
        )
    );

?>
