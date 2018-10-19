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

$jersey = array('jerseycity', 'jersey city', 'jersy', 'jerseycit'); 

if(strpos($body, 'NEED') !== false)  
{

if(strpos($body, 'A+') !== false) 
{
	if(strpos($body, $jersey) !== false) 
	
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
	else
		
		{
			$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Sorry Not Available ",
        )
    );
		}
}
if(strpos($body, 'nyc') !== false)
{
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "not available",
        )
    );
	
}
if("25.0"<= $bmi and $bmi <="29.9")
{
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "\n\nYou are OVERWEIGHT \n\nFood Intake Necessary : \n\tVegetables \n\tSprouts \n\tYogurt \n\tGreen Tea \n\tFruits \n\n Exercise Necessary : \n\tBench Press \n\tIncline Bench Press \n\tCable Crossovers \n\tOne Arm Dumbbell Rows \n\tBar pulldowns \n\tDeadlifts",
        )
    );
}
		
if($bmi >="30.0")
{
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "\n\nYou are OBESE \n\nFood Intake Necessary : \n\tGreen Leafy Vegetables \n\tAvocado \n\t\Wheat \n\tSoyabean \n\tCocoa \n\tBerries \n\tGarlic \n\n Exercise Necessary : \n\tLeg Press \n\tLeg Extensions \n\tHamstring Curls \n\tSeated Calf Raises \n\tStanding Calf Raises",
        )
    );
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