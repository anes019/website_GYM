<?php  

include "Clients.php";
if(isset($_GET['activation_code']))
{
	 $client=new Clients();
$msg=$client->activer($_GET['activation_code']);
	if($msg='ok')  
	{  
		      ?>
      <script language="javascript">
      	 alert('Mail confirmed  ');
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



