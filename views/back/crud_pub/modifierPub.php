<HTML>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="veriferChamps_Pub.js"></script>
</head>

<body>
<?php
if (isset($_POST['modifier'])){


  $name = $_FILES['im']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["im"]["name"]);
move_uploaded_file($_FILES['im']['tmp_name'],$target_dir.$name);
  header('Location: modifierPub.php');
}


?>




<?PHP
include "C:/wamp64/www/website_GYM/entites/pub.php";
include "C:/wamp64/www/website_GYM/core/pubC.php";
if (isset($_GET['id'])){
	$pubC=new pubC();
    $result=$pubC->recupererPub($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$pos=$row['pos'];
		$im=$row['im'];
		
?>
<div class="col-lg-6 m-auto">
  <br><br>
<form method="POST" action="" enctype='multipart/form-data'>


 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Pub </h1>
 </div>

  <div class="col-12 col-md-9">
    <label> NOM: </label>
    <input type="text" id="nome" name="nom" value="<?PHP echo $nom ?>" class="form-control"> 
  </div>

 <div class="col-12 col-md-9">
      <label> Position: </label>
       <select name="pos" id="position"  class="form-control">
       <option value="<?PHP echo $pos ?>"> pos <?PHP echo $pos ?></option>
       <option value="0">choix</option>
       <option value="1">pos 1</option>
       <option value="2">pos 2</option>
       <option value="3">pos 3</option>
       </select>  
 </div>
          
<div class="col-12 col-md-9">
      <label for="images_input" class=" form-control-label">Images input</label>
    <input type="file" id="images_input" name="im"  value="<?PHP echo $im ?>" class="form-control-file">
  <br>
</div>
   <div class="card-footer">
  <button class="btn btn-primary btn-sm" type="submit" name="modifier" value="modifier" onclick="verifChamps()"><i class="fa fa-dot-circle-o"></i> Submit </button>
  <tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
  <button class="btn btn-danger btn-sm" type="reset" name="done"><i class="fa fa-ban"></i> Reset </button>
  </div>
  
</form>
</div>
<?PHP
	}
}
if (isset($_POST['modifier'])){
         if(empty($_POST['nom']) || empty($_POST['pos'])|| empty($name))
       {
          header('Location: ../afficher_data.php');
       }
       else
	{$target_dir = "upload/";
   $pub=new pub($_POST['nom'],$_POST['pos'],$target_dir.$name);
	$pubC->modifierPub($pub,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: ../afficher_data.php');
}
}
?>
</body>
</HTMl>