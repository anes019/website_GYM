
<?php
//index.php
session_start();
$connect = mysqli_connect("localhost", "root", "", "site_web");
function make_query($connect)
{
 $query = "SELECT * FROM pub where pos =1";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_query2($connect)
{
 $query = "SELECT * FROM pub where pos =2";
 $result = mysqli_query($connect, $query);
 return $result;
}
function make_query3($connect)
{
 $query = "SELECT * FROM pub where pos =3";
 $result = mysqli_query($connect, $query);
 return $result;
}
function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '         
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
 

   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  if(!empty( $_SESSION['l'])) 
  {$output .= '
   <img id ="skip253" src="back/crud_pub/'.$row["im"].'" alt="'.$row["pos"].'" />

   <div class="carousel-caption">

   </div>
<form method="POST" action="nblike.php">
  <button class="btn btn-primary btn-sm" id="butt" type="submit" name="done"> Like </button>
  <button class="btn btn-primary btn-sm" id="butt1" type="submit" name="idone"> Dislike </button>
      <input type="hidden" value="'.$row["id"].'" name ="id" >
</form>
  </div>
  ';}
  else
  {$output .= '
   <img id ="skip253" src="back/crud_pub/'.$row["im"].'" alt="'.$row["pos"].'" />

   <div class="carousel-caption">

   </div>
  </div>
  ';

  }
  $count = $count + 1;
 }
 return $output;
}
function make_slides2($connect)
{
 $output = '';
 $count = 0;
 $result = make_query2($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
    if(!empty( $_SESSION['l'])) 
  {$output .= '
   <img id ="skip253" src="back/'.$row["im"].'" alt="'.$row["pos"].'" />

   <div class="carousel-caption">

   </div>
<form method="POST" action="nblike.php">
  <button class="btn btn-primary btn-sm" id="butt" type="submit" name="done"> Like </button>
  <button class="btn btn-primary btn-sm" id="butt1" type="submit" name="idone"> Dislike </button>
      <input type="hidden" value="'.$row["id"].'" name ="id" >
</form>
  </div>
  ';}
  else
  {$output .= '
   <img id ="skip253" src="back/crud_pub/'.$row["im"].'" alt="'.$row["pos"].'" />

   <div class="carousel-caption">

   </div>
  </div>
  ';}
  $count = $count + 1;
 }
 return $output;
}

function make_slides3($connect)
{
 $output = '';
 $count = 0;
 $result = make_query3($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
      if(!empty( $_SESSION['l'])) 
  {$output .= '
   <img id ="skip253" src="back/'.$row["im"].'" alt="'.$row["pos"].'" />

   <div class="carousel-caption">

   </div>
<form method="POST" action="nblike.php">
  <button class="btn btn-primary btn-sm" id="butt" type="submit" name="done"> Like </button>
  <button class="btn btn-primary btn-sm" id="butt1" type="submit" name="idone"> Dislike </button>
      <input type="hidden" value="'.$row["id"].'" name ="id" >
</form>
  </div>
  ';}
  else
  {$output .= '
   <img id ="skip253" src="back/crud_pub/'.$row["im"].'" alt="'.$row["pos"].'" />

   <div class="carousel-caption">

   </div>
  </div>
  ';}
  $count = $count + 1;
 }
 return $output;
}
?>