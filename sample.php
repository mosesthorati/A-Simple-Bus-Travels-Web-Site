<?php
function sendSMS($senderID, $recipient_no, $message){
    // Request parameters array
    $requestParams = array(
        'user' => 'codexworld',
        'apiKey' => 'dssf645fddfgh565',
        'senderID' => $senderID,
        'recipient_no' => $recipient_no,
        'message' => $message
    );
    
    // Merge API url and parameters
    $apiUrl = "http://api.example.com/http/sendsms?";
    foreach($requestParams as $key => $val){
        $apiUrl .= $key.'='.urlencode($val).'&';
    }
    $apiUrl = rtrim($apiUrl, "&");
    
    // API call
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    // Return curl response
    return $response;
}




 $rand_no = rand(10000, 99999);
$recipient_no = "8919001846";
 $message = 'Dear User, OTP for mobile number verification is '.$rand_no.'. Thanks CodexWorld';
            $send = sendSMS('CODEXW', $recipient_no, $message);
            
            if($send){
                $otpDisplay = 1;
				echo "<p>done</p>";
            }else{
				echo "<p>not Done</p>";
                $statusMsg = array(
                    'status' => 'error',
                    'msg' => "We're facing some issue on sending SMS, please try again."
                );
            }







?>