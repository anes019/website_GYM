<?php  

include "Clients.php";
if(isset($_POST['email']))
{ $client=new Clients();
	     $token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789';
        $token = str_shuffle($token);
        $token = substr($token, 0, 10);
$msg=$client->change($_POST['email'],$token);
	if($msg='ok')  
	{


require_once "phpmailer/class.phpmailer.php";

$message = "
<h2>RESET PASSWORD</h2>
<p>Hi ".$_POST['email'].",</p>
      <p> here is your new password </p> 
      <h1> ".$token." </h1>
<p>To better secure your account please change this password later  </p>
    
      <p>Best Regards,<br />BF Academy</p>
  ";





$mail = new PHPMailer(true);


$mail->IsSMTP();


$mail->SMTPDebug = 0;


$mail->SMTPAuth = true;

// sets the prefix to the server
$mail->SMTPSecure = 'tls';


$mail->Host = 'smtp.gmail.com';


$mail->Port = 587;


$mail->Username = 'bfacademy29@gmail.com';


$mail->Password = 'sitewebgym';


$mail->SetFrom('BFACADEMY@gmail.com', 'BFACADEMY');


$mail->AddAddress($_POST['email']);

//
$mail->MsgHTML($message);


try {
    // send mail
    $mail->Send();
    $msg = "Mail send successfully";
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
}




		      ?>
      <script language="javascript">
      	 alert('check your email');
location.replace("../views/login.php");

</script>
<?PHP 
	}  
	else 
	{
		echo 'error';
	}

} 
else{echo 'error2' ; } 
 ?>



