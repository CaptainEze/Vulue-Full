<?php
session_start();
require_once('../../config/serverconfig.php');
require_once('../../classes/process.php');
require_once('../../classes/users.php');

$requestingPage = stripslashes($_GET['_mode']);
$processRequest = new process;
$userFunctions = new User;

switch ($requestingPage) {
	case "user-login":
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$email = $processRequest->sanitize($_POST['email']);
            $pass = $processRequest->sanitize($_POST['pass']);
            if ($email==''||$pass=='') {
                $response = array('status'=>0,'input'=>"all",'message'=>"All fields are compulsory");
            }
            else{
                $arr = $userFunctions->loginUser($email,$processRequest->hashStr($pass));
                $response = array('status'=>$arr[0], 'input'=>$arr[2], 'message'=>$arr[1]);
            }
		}
        else {
            $response = array('status'=>0,'message'=>"Bad request");
        }
		break;


	case "user-register":
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $processRequest->sanitize($_POST['email']);
            $pass = $processRequest->sanitize($_POST['pass']);
            $cpass = $processRequest->sanitize($_POST['cpass']);
            $accType = $processRequest->sanitize($_POST['accType']);

            if ($email==''||$pass==''||$cpass==''||$accType=='') {
                $response = array('status'=>0,'input'=>"all",'message'=>"All fields are compulsory");
            }
            else if($userFunctions->checkIfEmailIsRegistered($email)){
                $response = array('status'=>0,'input'=>"email",'message'=>"Email has been registered");   
            }
            else if (!$processRequest->validateSame($pass,$cpass)) {
                $response = array('status'=>0,'input'=>"cpassword",'message'=>"Password and Confirm are different");
            } 
            else{
                $pass = $processRequest->hashStr($pass);
                $userFunctions->register($email,$pass,$accType);
                
                $response = array('status'=>1,'input'=>"details",'message'=>"Registeration Success");
            }
        }
        else {
            $response = array('status'=>0,'message'=>"Bad request");
        }
        break;

    case "otp-ver":
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $code = $processRequest->sanitize($_POST['code']);
            $email = $processRequest->sanitize($_POST['email']);
            if (strlen($code) != 6) {
                $response = array('status'=>0,'message'=>"Invalid OTP ");
            } else {
                if ($code == $_SESSION['axnfq']) {
                    if (!isset($_SESSION['user-id'])) {
                        $res = $liveDb->execQuery("SELECT c_id FROM users WHERE email = '$email'");
                        $res->data_seek(1);
                        $res = $res->fetch_array(MYSQLI_ASSOC);
                        $id = $res['c_id'];
                    }
                    $user = new UserFull($id);
                    $user ->verifyEmail();
                    $response = array('status'=>1,'message'=>"Email verification success please wait...");
                }else{
                    $response = array('status'=>0,'message'=>"Incorrect OTP provided");
                }
            }         
        }
        else {
            $response = array('status'=>0,'message'=>"Bad request");
        }
        break;

    case "otp-resend":
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $processRequest->sanitize($_POST['email']);
            $to = $email;
            $subj = "OTP for Email Verification";
            $from = "support@vulue.com";
            $header = "From: $from";
            $code = /*rand(100000,999999)*/ 545679;
            $_SESSION['axnfq'] = $code;
            $_SESSION['email'] = $email;
            $msg = "\n<h1 style='text-align: center;'>$code</h1>";
            $msg = wordwrap($msg, 70);
            //mail($to,$subj,$msg,$header);
            $response = array('status'=>1,'message'=>"Request sent");
        }
        else {
            $response = array('status'=>0,'message'=>"Bad request");
        }
        break;


    case 'set':
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $arr=array();
            foreach ($_POST as $key => $value) {
                $arr[$key] = $processRequest->sanitize($value);
            }
            // $user = new UserFull($_SESSION['user_id']);
            try {
                $user ->updateDetails($arr);
            $response = array('status'=>1,'message'=>"Settings updated success");
            } catch (e) {
                $response = array('status'=>0,'message'=>"Unable to update settings please try again");
            }
        }
        else {
            $response = array('status'=>0,'message'=>"Bad request");
        }
        break;	
	
	default:
		$response = array("status"=>0,"message"=>"Invalid Request, please check what you're doing");
		break;
}
 
echo json_encode($response);
?>