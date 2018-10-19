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
$body = $_REQUEST['Body']; 
$to = $_REQUEST['From'];
$from = $_REQUEST['To'];

echo "Hello You Will Recive Msg Soon From Twilio";
/*file_put_contents("php://stderr", substr($body,9,5).PHP_EOL);
file_put_contents("php://stderr", substr($body,23,5).PHP_EOL);
$height=substr($body,9,4);
$weight=substr($body,23,4); */

$syn = substr($body, 4);
if(strpos($sys, 'NEED') !== false)  
{

if(strpos($body, 'A+') !== false) 
{
	if(strpos($body, 'jersey city') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "available",
        )
    );
	}
	
	if(strpos($body, 'nyc') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "available",
        )
    );
	}
	
	if(strpos($body, 'queens') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "available",
        )
    );
	}
	if(strpos($body, 'long island') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "available",
        )
    );
	}
	
}

}
else
	

	{
		
		$client->messages->create(
	$to,
	array(
		'from' => $from,
		'body' => "Invalid syntax \n\n Please check syntax \n\n NEED <Bloodgroup> space <Location>",
	)
);
	
	
	
	}
	
	


?>