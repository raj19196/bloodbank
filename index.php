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
	if(stripos($body, '07306') !== false) 
		{
		$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "
			\n Blood Banks In 07306 \nChristopher Columbus Health Center - (201) 432-4600,
Central Jersey Blood Center (732) 901-0720 ,
Community Blood Services (866) 228-1500 \n Donars \n\n
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
			'body' => "\n Blood Banks In NYC\nFamilyCord - Cord Blood Banking -(800) 490-2673
New York Blood Center Inc - (718) 706-5290
Safeblood Foundation-America - (212) 230-1666\n
Donors
evan O- (201) 432-4600
isaac A- (201) 432-4600
zoe O+ (201) 432-4600
victoria A+ (201) 432-4600",
        )
    );
	}
	
	if(stripos($body, 'queens') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n Blood Bank Transfusion Service (212) 746-4443
Children's Blood Foundation -(212) 297-4336
DCI Biologicals, Inc. -(718) 479-3300 \n
Donors
luis A+ (201) 432-4600
molly A- (201) 432-4600
lydia A- (201) 432-4600",
        )
    );
	}
	if(stripos($body, 'long island') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n New York Blood Center Inc -(718) 706-5200
Long Island Blood Services - (800) 933-2566
Memorial Sloan Kettering Blood Donation Room -(212) 639-7643 \n
Donors 
Angel A+ (201) 432-4600
Jordan A- (201) 432-4600
sophie O+ (201) 432-4600
alaxa O- (201) 432-4600",
        )
    );
	}
	
	

	
}


if(stripos($body, 'A-') !== false) 
{
	if(stripos($body, '07306') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "\n Blood Banks In 07306\nChristopher Columbus Health Center - (201) 432-4600,
Central Jersey Blood Center (732) 901-0720 ,
Community Blood Services (866) 228-1500 \n Donars \n
ashlesha deshmukh A- (201) 432-4600",
        )
    );
	}
	
	if(stripos($body, 'nyc') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "\n Blood Banks In NYC\nFamilyCord - Cord Blood Banking -(800) 490-2673
New York Blood Center Inc - (718) 706-5290
Safeblood Foundation-America - (212) 230-1666",
        )
    );
	}
	
	if(stripos($body, 'queens') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nBlood Bank Transfusion Service (212) 746-4443
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
			'body' => "Blood Banks\n New York Blood Center Inc -(718) 706-5200
Long Island Blood Services - (800) 933-2566
Memorial Sloan Kettering Blood Donation Room -(212) 639-7643 \n Donors \n 
Jordan A- (201) 432-4600
alaxa O- (201) 432-4600",
        )
    );
	}
	
}
if(stripos($body, 'B+') !== false) 
{
	if(stripos($body, '07306') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "\n Blood Banks In 07306\nChristopher Columbus Health Center - (201) 432-4600,
Central Jersey Blood Center (732) 901-0720 ,
Community Blood Services (866) 228-1500 \n Donars \n 
raj patel B+ (201) 432-4600
mia B+ (201) 432-4600
noah O+ (201) 432-4600
emma O- (201) 432-4600",
        )
    );
	}
	
	if(stripos($body, 'nyc') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nFamilyCord - Cord Blood Banking -(800) 490-2673
New York Blood Center Inc - (718) 706-5290
Safeblood Foundation-America - (212) 230-1666\n
Donors
ryan B+ (201) 432-4600
sarah B+ (201) 432-4600
evan O- (201) 432-4600
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
			'body' => "Blood Banks \n\nBlood Bank Transfusion Service (212) 746-4443
Children's Blood Foundation -(212) 297-4336
DCI Biologicals, Inc. -(718) 479-3300\n Donars 
connor B+ (201) 432-4600
henry B+ (201) 432-4600
maria B+ (201) 432-4600
robert O+ (201) 432-4600
kylie O- (201) 432-4600",
        )
    );
	}
	if(stripos($body, 'long island') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nNew York Blood Center Inc -(718) 706-5200
Long Island Blood Services - (800) 933-2566
Memorial Sloan Kettering Blood Donation Room -(212) 639-7643\n Donars 
sophie O+ (201) 432-4600
alaxa O- (201) 432-4600
aaron B+ (201) 432-4600
wyatt B+ (201) 432-4600",
        )
    );
	}
	
}


if(stripos($body, 'B-') !== false) 
{
	if(stripos($body, '07306') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "\n Blood Banks In 07306\nChristopher Columbus Health Center - (201) 432-4600,
Central Jersey Blood Center (732) 901-0720 ,
Community Blood Services (866) 228-1500 \n Donars \n
emma O- (201) 432-4600
ava B- (201) 432-4600",
        )
    );
	}
	
	if(stripos($body, 'nyc') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "\n Blood Banks In NYC\nFamilyCord - Cord Blood Banking -(800) 490-2673
New York Blood Center Inc - (718) 706-5290
Safeblood Foundation-America - (212) 230-1666 Donars
michael B- (201) 432-4600
ella O- (201) 432-4600",
        )
    );
	}
	
	if(stripos($body, 'queens') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nBlood Bank Transfusion Service (212) 746-4443
Children's Blood Foundation -(212) 297-4336
DCI Biologicals, Inc. -(718) 479-3300\n Donars
kylie O- (201) 432-4600",
        )
    );
	}
	if(stripos($body, 'long island') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nNew York Blood Center Inc -(718) 706-5200
Long Island Blood Services - (800) 933-2566
Memorial Sloan Kettering Blood Donation Room -(212) 639-7643\n Donars
claire B- (201) 432-4600
alaxa O- (201) 432-4600",
        )
    );
	}
	
}


if(stripos($body, 'AB+') !== false) 
{
	if(stripos($body, '07306') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "\n Blood Banks In 07306\n Christopher Columbus Health Center - (201) 432-4600,
Central Jersey Blood Center (732) 901-0720 ,
Community Blood Services (866) 228-1500 \n Donars \n

raj patel B+ (201) 432-4600
ashlesha deshmukh A- (201) 432-4600
drashti patel A+ (201) 432-4600
Sophia O+ (201) 432-4600
isabella AB- (201) 432-4600
emma O- (201) 432-4600
ava B- (201) 432-4600
emily AB- (201) 432-4600
mia B+ (201) 432-4600
daniel A+ (201) 432-4600
matthew A+ (201) 432-4600
noah O+ (201) 432-4600",
        )
    );
	}
	
	if(stripos($body, 'nyc') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "\n Blood Banks In NYC\nFamilyCord - Cord Blood Banking -(800) 490-2673
New York Blood Center Inc - (718) 706-5290
Safeblood Foundation-America - (212) 230-1666\n Donars
michael B- (201) 432-4600
ella O- (201) 432-4600
william AB- (201) 432-4600
john AB+ (201) 432-4600
ryan B+ (201) 432-4600
sarah B+ (201) 432-4600
zoey B- (201) 432-4600
victoria A+ (201) 432-4600
anna AB- (201) 432-4600
evan O- (201) 432-4600
isaac A- (201) 432-4600
zoe O+ (201) 432-4600
",
        )
    );
	}
	
	if(stripos($body, 'queens') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nBlood Bank Transfusion Service (212) 746-4443
Children's Blood Foundation -(212) 297-4336
DCI Biologicals, Inc. -(718) 479-3300\n Donars
robert O+ (201) 432-4600
kylie O- (201) 432-4600
julia AB- (201) 432-4600
henry B+ (201) 432-4600
connor B+ (201) 432-4600
sam AB- (201) 432-4600
luis A+ (201) 432-4600
molly A- (201) 432-4600
lydia A- (201) 432-4600
maria B+ (201) 432-4600
",
        )
    );
	}
	if(stripos($body, 'long island') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nNew York Blood Center Inc -(718) 706-5200
Long Island Blood Services - (800) 933-2566
Memorial Sloan Kettering Blood Donation Room -(212) 639-7643\n Donars
Angel A+ (201) 432-4600
Jordan A- (201) 432-4600
Taylor B+ (201) 432-4600
claire B- (201) 432-4600
sophie O+ (201) 432-4600
alaxa O- (201) 432-4600
julia AB- (201) 432-4600
bella AB+ (201) 432-4600
aaron B+ (201) 432-4600
wyatt B+ (201) 432-4600
eli A + (201) 432-4600",
        )
    );
	}
	
}
if(stripos($body, 'AB-') !== false) 
{
	if(stripos($body, '07306') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "\n Blood Banks In 07306\nChristopher Columbus Health Center - (201) 432-4600,
Central Jersey Blood Center (732) 901-0720 ,
Community Blood Services (866) 228-1500 \n Donars \n
ashlesha deshmukh A- (201) 432-4600
isabella AB- (201) 432-4600
emma O- (201) 432-4600",
        )
    );
	}
	
	if(stripos($body, 'nyc') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "\n Blood Banks In NYC\nFamilyCord - Cord Blood Banking -(800) 490-2673
New York Blood Center Inc - (718) 706-5290
Safeblood Foundation-America - (212) 230-1666\n Donars
zoey B- (201) 432-4600
victoria A+ (201) 432-4600
anna AB- (201) 432-4600
evan O- (201) 432-4600
isaac A- (201) 432-4600",
        )
    );
	}
	
	if(stripos($body, 'queens') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nBlood Bank Transfusion Service (212) 746-4443
Children's Blood Foundation -(212) 297-4336
DCI Biologicals, Inc. -(718) 479-3300 \n Donars
molly A- (201) 432-4600
lydia A- (201) 432-4600
kylie O- (201) 432-4600
julia AB- (201) 432-4600
",
        )
    );
	}
	if(stripos($body, 'long island') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nNew York Blood Center Inc -(718) 706-5200
Long Island Blood Services - (800) 933-2566
Memorial Sloan Kettering Blood Donation Room -(212) 639-7643\n Donars
claire B- (201) 432-4600
Jordan A- (201) 432-4600
alaxa O- (201) 432-4600
julia AB- (201) 432-4600",
        )
    );
	}
	
}

if(stripos($body, 'O+') !== false) 
{
	if(stripos($body, '07306') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "\n Blood Banks In 07306\nChristopher Columbus Health Center - (201) 432-4600,
Central Jersey Blood Center (732) 901-0720 ,
Community Blood Services (866) 228-1500 \n Donars \n
Sophia O+ (201) 432-4600
emma O- (201) 432-4600
noah O+ (201) 432-4600",
        )
    );
	}
	
	if(stripos($body, 'nyc') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "\n Blood Banks In NYC\nFamilyCord - Cord Blood Banking -(800) 490-2673
New York Blood Center Inc - (718) 706-5290
Safeblood Foundation-America - (212) 230-1666 \n Donars
Sorry no Donor available",
        )
    );
	}
	
	if(stripos($body, 'queens') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nBlood Bank Transfusion Service (212) 746-4443
Children's Blood Foundation -(212) 297-4336
DCI Biologicals, Inc. -(718) 479-3300\n Donor
kylie O- (201) 432-4600
robert O+ (201) 432-4600",
        )
    );
	}
	if(stripos($body, 'long island') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nNew York Blood Center Inc -(718) 706-5200
Long Island Blood Services - (800) 933-2566
Memorial Sloan Kettering Blood Donation Room -(212) 639-7643 \n\n
			Donars
			sophie O+ (201) 432-4600
alaxa O- (201) 432-4600",
        )
    );
	}
	
}


if(stripos($body, 'O-') !== false) 
{
	if(stripos($body, '07306') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "\n Blood Banks In 07306\nChristopher Columbus Health Center - (201) 432-4600,
Central Jersey Blood Center (732) 901-0720 ,
Community Blood Services (866) 228-1500 \n Donars \n Sorry no Donor Available",
        )
    );
	}
	
	if(stripos($body, 'nyc') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "\n Blood Banks In NYC\nFamilyCord - Cord Blood Banking -(800) 490-2673
New York Blood Center Inc - (718) 706-5290
Safeblood Foundation-America - (212) 230-1666 \n Donars \n Sorry no Donor Available \n Nearby Location in Queens
kylie O- (201) 432-4600
alaxa O- (201) 432-4600",
        )
    );
	}
	
	if(stripos($body, 'queens') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nBlood Bank Transfusion Service (212) 746-4443
Children's Blood Foundation -(212) 297-4336
DCI Biologicals, Inc. -(718) 479-3300\n Donars
kylie O- (201) 432-4600",
        )
    );
	}
	if(stripos($body, 'long island') !== false) 
	
	{
	
	$client->messages->create(
        $to,
        array(
            'from' => $from,
			'body' => "Blood Banks \n\nNew York Blood Center Inc -(718) 706-5200
Long Island Blood Services - (800) 933-2566
Memorial Sloan Kettering Blood Donation Room -(212) 639-7643\n Donars
alaxa O- (201) 432-4600",
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