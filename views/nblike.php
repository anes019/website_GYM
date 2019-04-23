<?php 
$id=$_POST['id'];
$connect = mysqli_connect("localhost", "root", "", "site_web");
if (isset($_POST['done'])) {
	# code...


 $query = "UPDATE pub SET nb=nb+1 WHERE id='$id'";
 $result = mysqli_query($connect, $query);
 header("Location: index.php");
}
if (isset($_POST['idone'])) {
	# code...


 $query = "UPDATE pub SET nb_dis=nb_dis+1 WHERE id='$id'";
 $result = mysqli_query($connect, $query);
 header("Location: index.php");
}






if (isset($_POST['done1'])) {
	# code...


 $query = "UPDATE pub SET nb=nb+1 WHERE pos='2'";
 $result = mysqli_query($connect, $query);
 header("Location: index.php");
}
if (isset($_POST['done2'])) {
	# code...


 $query = "UPDATE pub SET nb=nb+1 WHERE pos='3'";
 $result = mysqli_query($connect, $query);
 header("Location: index.php");
}

 ?>