<?php 
$id=$_POST['id'];
if (isset($_POST['done'])) {
	# code...

$connect = mysqli_connect("localhost", "root", "", "site_web");
 $query = "UPDATE pub SET nb=nb+1 WHERE id='$id'";
 $result = mysqli_query($connect, $query);
 header("Location: index.php");
}
if (isset($_POST['idone'])) {
	# code...

$connect = mysqli_connect("localhost", "root", "", "site_web");
 $query = "UPDATE pub SET nb_dis=nb_dis+1 WHERE id='$id'";
 $result = mysqli_query($connect, $query);
 header("Location: index.php");
}






if (isset($_POST['done1'])) {
	# code...

$connect = mysqli_connect("localhost", "root", "", "site_web");
 $query = "UPDATE pub SET nb=nb+1 WHERE pos='2'";
 $result = mysqli_query($connect, $query);
 header("Location: index.php");
}
if (isset($_POST['done2'])) {
	# code...

$connect = mysqli_connect("localhost", "root", "", "site_web");
 $query = "UPDATE pub SET nb=nb+1 WHERE pos='3'";
 $result = mysqli_query($connect, $query);
 header("Location: index.php");
}

 ?>