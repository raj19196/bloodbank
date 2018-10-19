<?php
require_once './autoload.php';
use Twilio\Twiml;
$body = $_REQUEST['Body'];
$from = $_REQUEST['From'];
if( (stripos($body, 'B+' )!== FALSE) && (stripos($body, 'jersey' )!== FALSE)){
 $response = new Twiml();
$message = $response->message("contact _ Name B+");
}
else if(  (stripos($body, 'A+' )!== FALSE) && (stripos($body, 'jersey' )!== FALSE){
 $response = new Twiml();
$message = $response->message("Not Avail.");
}

else if( ($from == '+19292402278') && (stripos($body, '12345' )!== FALSE) && (stripos($body, '2017-10-03' )!== FALSE) && (stripos($body, 'attendance' )!== FALSE)){
 $response = new Twiml();
$message = $response->message("Your ward was Absent on this date.");
}

else if( ($from != '+19292402278') && (stripos($body, '12345' )!== FALSE) && (stripos($body, '2017-10-03' )!== FALSE) && (stripos($body, 'attendance' )!== FALSE)){
 $response = new Twiml();
$message = $response->message("Sorry this is not a registered number. Please try again with a registered number.");
}

else if ($from != '+19292402278'){
 $response = new Twiml();
$message = $response->message("Sorry this is not a registered number. Please try again with a registered number.");
}


else if( ($from == '+19292402278') && (stripos($body, '12345' )!== FALSE) && (stripos($body, '2017-10-04' )!== FALSE) && (stripos($body, 'attendance' )!== FALSE)){
 $response = new Twiml();
$message = $response->message("Your ward was Absent on this date.");
}

else {
 $response = new Twiml();
$message = $response->message("Incorrect Format. Try date(yyyy-mm-dd) attendance and Roll No.");
}

echo $response;
?>
