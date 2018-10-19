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

$bloodDetails = array(
    'A+'    => array('City' => 'Jersey City',
                         'Hospital' => 'Jersey City Medical Center'),
    'A-'       => array('City' => 'NYC',
                         'Hospital' => 'NYC'),
    'B+'   => array('City' => 'Boston',
                         'Hospital' => 'Boston Medical Center'),
    'B-'       => array('body' => 'Edison',
                         'Hospital' => 'Edison Care'),
		'O+'   => array('City' => 'Boston',
										     'Hospital' => 'Boston Medical Center'),
		'O-'       => array('body' => 'Edison',
										     'Hospital' => 'Edison Care'),
		'AB+'   => array('City' => 'Boston',
													'Hospital' => 'Boston Medical Center'),
		'AB-'       => array('body' => 'Edison',
													'Hospital' => 'Edison Care')
);

$body = $_REQUEST['Body'];
$to = $_REQUEST['From'];
$from = $_REQUEST['To'];
file_put_contents("php://stderr", substr($body,0,3).PHP_EOL);
$blood_group=substr($body,0,3);

foreach ($bloodDetails as $blood => $detail) {
    if ($blood == $blood_group) {
        $body = $detail['City'];
        $Hospital= $detail['Hospital'];

    }
}

$client->messages->create(
        $to,
        array(
            'from' => $from,
            'body' => $body."\n".$Hospital
        )
    );

?>
