<?php 
session_start();
include "C:/wamp64/www/website_GYM/core/pubC.php";
$id=$_POST['id'];
$client=$_SESSION['l'];

$connect = mysqli_connect("localhost", "root", "", "site_web");
if (isset($_POST['done'])) {
	# code...
$query1 = "SELECT * FROM pub_liked where (client='$client' && pub='$id')";
$result1 = mysqli_query($connect, $query1);
$rowcount=mysqli_num_rows($result1);
if ($rowcount ==0) {
	# code...

$pub1C=new pubC();
$pub1C->ajouterPub_liked($client,$id);
 $query = "UPDATE pub SET nb=nb+1 WHERE id='$id'";
 $result = mysqli_query($connect, $query);
  header("Location: index.php");
}
else
{
	echo"<script language=\"javascript\">";
echo"alert('vous avez deja aimer cette pub ')";
echo"</script>";
	echo"<script language=\"javascript\">";
echo"window.location.href='index.php'";
echo"</script>";
}

}


 ?>