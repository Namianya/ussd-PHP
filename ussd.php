<?php
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];
$input       = $_POST["input"];


//user variables they will be from the database
$accountNumber  = "12345678";
$mpesaNumber = "0712345678";
$amount = "100";
$email = 'test@test.com';




if ($text == "") {
    $response  = "CON Welcome to Nzoia water Services Company Please select an option from the menu; \n";
    $response .= "1. Check Bill \n";
    $response .= "2. Pay Bill \n";
    $response .= "3. My Consumption History \n";
    $response .= "4. Contact us \n";

// check bill

} else if ($text == "1") {
    $response= "CON Kindly enter your meter number \n";

} else if($text == "1*".$accountNumber) {  
    $response = "END Thank you. You will receive confirmation shortly";

// } else if($text != "1*".$accountNumber) {  
//     $response = "END Invalid";
    
    // end of check bill

}
else if ( $text == "2" ) {
    $response = "CON Choose payment option ";
    $response .= "1. M-Pesa";
    

} else if ($text == "2*1") {
    $response = "CON Enter your Meter number \n ";



} else if($text == "2*1".$accountNumber) { 
    $response = "CON Enetr your mpesa number  \n";

} else if($text == "2*1".$accountNumber.$mpesaNumber) { 
    $response = "CON The amount yo wish to pay ";
    
} else if($text == "2*1".$accountNumber.$mpesaNumber.$amount) { 
    //mpesa stk function
    $response = "End Please wait as we open your mpesa service ";
    
} else if ( $text == "3" ) {
    $response = "CON Please enter your email address \n ";
}
else if ( $text == "3".$email ) {
    $response = "END Your usage history will be sent to your account shotly \n ";
}
else if ( $text == "4" ) {
    $response = "END Call our help line on +254712345678 ";
}
else {
    $response = "END Wrong input try agin latter";
}
header('Content-type: text/plain');
echo $response;