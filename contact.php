<?php

$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);

$to = 'kabayevperman@gmail.com';
$cc = 'azat@akmyradov.me';
$subject = "Client from Appet Website - " . $data['name'];
$from = $data['email'];
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'CC:' . $cc."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body style="margin:0;">';
$message .= '<div style="background: #f6f6f6; margin: 0; padding: 20px;">';
$message .= '<div style="background: #fff; padding: 10px"><p>';
$message .= "<strong>Name:</strong> {$data['name']}";
$message .= "<br><strong>Email:</strong> {$data['email']}";
$message .= "<br><strong>Message:</strong>";
$message .= "<br>{$data['message']}";
$message .= '</p></div></div></body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo json_encode(['action' => 'success']);
} else{
    echo json_encode(['action' => 'fail']);
}
