<?php
error_reporting(E_ALL);
// Code for Twilio Support Document: https://support.twilio.com/hc/en-us/articles/223134267-Building-an-SMS-Keyword-Response-Application
// Get the PHP helper library from twilio.com/docs/php/install
require __DIR__ . '/vendor/autoload.php'; // Loads the library. This may vary depending on how you installed the library.
use Twilio\Rest\Client;

/*
** Your Account Sid and Auth Token from twilio.com/user/account
*/
$sid = "AC8bf2761c3c1d8acae165aeba62af97df";
$token = "e58e4224d480e5a66f565b0e7188a7ca";
$client = new Client($sid, $token);



$body = $_REQUEST['Body'];
$to = $_REQUEST['From'];
$from = $_REQUEST['To'];
if( (stripos($body, 'B+' )!== FALSE) && (stripos($body, 'jersey' )!== FALSE)){

$message = ("contact _ Name B+");
}
else (  (stripos($body, 'A+' )!== FALSE) && (stripos($body, 'jersey' )!== FALSE){

$message = ("Not Avail.");
}

$client->messages->create(
        $to,
        array(
            'from' => $from,
            'body' => $body."\n".$message
        )
    );

?>
