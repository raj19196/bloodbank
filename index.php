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


if(stripos($body, 'NEED') !== false)  
{

if(stripos($body, 'A+') !== false) 
{
	if(stripos($body, 'jersey city') !== false) 
		{
		$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "
			Blood Banks \n\nChristopher Columbus Health Center - (201) 432-4600,
Central Jersey Blood Center (732) 901-0720 ,
Community Blood Services (866) 228-1500\n\n
Donors
drashti patel A+ (201) 432-4600
daniel A+ (201) 432-4600
matthew A+ (201) 432-4600
Sophia O+ (201) 432-4600
ashlesha deshmukh A- (201) 432-4600",
        )  );
		}
	
	if(stripos($body, 'nyc') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nFamilyCord - Cord Blood Banking -(800) 490-2673
New York Blood Center Inc - (718) 706-5290
Safeblood Foundation-America - (212) 230-1666\n\n
Donors
evan O- (201) 432-4600
isaac A- (201) 432-4600
zoe O+ (201) 432-4600",
        )
    );
	}
	
	if(stripos($body, 'queens') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n Blood Bank Transfusion Service (212) 746-4443
Children's Blood Foundation -(212) 297-4336
DCI Biologicals, Inc. -(718) 479-3300",
        )
    );
	}
	if(stripos($body, 'long island') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n New York Blood Center Inc -(718) 706-5200
Long Island Blood Services - (800) 933-2566
Memorial Sloan Kettering Blood Donation Room -(212) 639-7643",
        )
    );
	}
	
	

	
}


if(stripos($body, 'A-') !== false) 
{
	if(stripos($body, 'jersey city') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nChristopher Columbus Health Center - (201) 432-4600,
Central Jersey Blood Center (732) 901-0720 ,
Community Blood Services (866) 228-1500",
        )
    );
	}
	
	if(stripos($body, 'nyc') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	
	if(stripos($body, 'queens') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	if(stripos($body, 'long island') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	
}
if(stripos($body, 'B+') !== false) 
{
	if(stripos($body, 'jersey city') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nChristopher Columbus Health Center - (201) 432-4600,
Central Jersey Blood Center (732) 901-0720 ,
Community Blood Services (866) 228-1500",
        )
    );
	}
	
	if(stripos($body, 'nyc') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	
	if(stripos($body, 'queens') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	if(stripos($body, 'long island') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	
}


if(stripos($body, 'B-') !== false) 
{
	if(stripos($body, 'jersey city') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nChristopher Columbus Health Center - (201) 432-4600,
Central Jersey Blood Center (732) 901-0720 ,
Community Blood Services (866) 228-1500",
        )
    );
	}
	
	if(stripos($body, 'nyc') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	
	if(stripos($body, 'queens') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	if(stripos($body, 'long island') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	
}


if(stripos($body, 'AB+') !== false) 
{
	if(stripos($body, 'jersey city') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n Christopher Columbus Health Center - (201) 432-4600,
Central Jersey Blood Center (732) 901-0720 ,
Community Blood Services (866) 228-1500",
        )
    );
	}
	
	if(stripos($body, 'nyc') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	
	if(stripos($body, 'queens') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	if(stripos($body, 'long island') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	
}
if(stripos($body, 'AB-') !== false) 
{
	if(stripos($body, 'jersey city') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nChristopher Columbus Health Center - (201) 432-4600,
Central Jersey Blood Center (732) 901-0720 ,
Community Blood Services (866) 228-1500",
        )
    );
	}
	
	if(stripos($body, 'nyc') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	
	if(stripos($body, 'queens') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	if(stripos($body, 'long island') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	
}

if(stripos($body, 'O+') !== false) 
{
	if(stripos($body, 'jersey city') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nChristopher Columbus Health Center - (201) 432-4600,
Central Jersey Blood Center (732) 901-0720 ,
Community Blood Services (866) 228-1500",
        )
    );
	}
	
	if(stripos($body, 'nyc') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	
	if(stripos($body, 'queens') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	if(stripos($body, 'long island') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	
}


if(stripos($body, 'O-') !== false) 
{
	if(stripos($body, 'jersey city') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nChristopher Columbus Health Center - (201) 432-4600,
Central Jersey Blood Center (732) 901-0720 ,
Community Blood Services (866) 228-1500",
        )
    );
	}
	
	if(stripos($body, 'nyc') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	
	if(stripos($body, 'queens') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
        )
    );
	}
	if(stripos($body, 'long island') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\n",
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
		'body' => "Invalid syntax \n\n Please check syntax \n\n NEED <Bloodgroup> space <Location> \n\n ignore <>",
	)
);
	
	
	
	}
	
	


?>