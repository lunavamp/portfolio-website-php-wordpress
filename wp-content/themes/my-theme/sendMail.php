<?php
define("RECAPTCHA_V3_SECRET_KEY", '6Le1KSgqAAAAALZntNB8_Yh0Y9814HXpD_zExJrG');

$_POST = json_decode(file_get_contents("php://input"), true);



$mail_to = 'karina.kolesnichenko@outlook.com';
$name = fil('name');
$email = fil('email');
$message = fil('message');
$token = $_POST['token'];
$action = 'submit';

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   resp(false, 'Wrong email');
}
 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);
  

// verify the response
if($arrResponse["success"] === true && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5){
	$content = '
	<p><b>Name:</b> '.$name.'</p>
	<p><b>Email:</b> '.$email.'</p>
	<p><b>Your message:</b> '.$message.'</p>
	';
	mail($mail_to, 'Send Me A Message', $content,     "From: info@uiunicorn.dev\r\n"
    ."Content-type: text/html; charset=utf-8\r\n"
    ."X-Mailer: PHP mail script");
	resp();
}else{
	resp(false);
}




 
function resp($status=true, $message=''){
	exit(json_encode([
    'status' => $status,
    'message'=> $message
	], 256));
};

function fil($name){
	return htmlspecialchars(stripslashes($_POST[$name]));
}
