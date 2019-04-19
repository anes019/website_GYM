<?php 
 include'header.php' 
 ?>
<html lang="en">
  <head>
    <title>Reclamation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main2.css">
    <link rel="stylesheet" href="css/linearicons2.css">
    <link rel="stylesheet" href="css/themify-icons2.css">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/util_form.css">
  <link rel="stylesheet" type="text/css" href="css/main_form.css">
 <link rel="stylesheet" type="text/css" href="css/style_reclamation.css">


  </head>
<body>

    <!-- END nav -->

    <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Gym Trainer</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>PROFIL</span></p>
          </div>
        </div>
      </div>
    </section>


<section>
   <div class="container-login100" style="background-color: #c2c2a3 " >
      <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
        <form class="login100-form validate-form" method="POST" action="../core/ajoutreclamation.php">
          <span class="login100-form-title p-b-55">
            Reclamation
          </span>

  <!------------------------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------------------------------------->
      <!------------------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------->

    


 <div class="card">
  <h2>Type de reclamation</h2>
  
  <ul>
    <li>
      <input type="radio"  id="one" name="choix" value="Option1"   />
      <label for="one" >Option 1</label>
      
      <div class="check"></div>
    </li>
    
    <li>
      <input type="radio"  id="two" name="choix" value="Option2" />
      <label for="two" >Option 2</label>
      
      <div class="check"></div>
    </li>

  </ul>
    <span id='r'></span><br>
</div>
        


          <div class="wrap-input100 validate-input" >
          
          
            <span class="focus-input100"></span>
        

          <br>
<br>
          <div class="wrap-input100 validate-input" >
            <span class="label-input100">Votre Message de reclamation <br> <br> </span> 

<TEXTAREA name="reviews" rows=5 cols=50  required ></textarea>
 <span id='con'></span><br>

                        
          </div>



          <div class="flex-m w-full p-b-33">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb" type="checkbox" name="term">
              <label class="label-checkbox100" for="ckb">
                <span class="txt1">
                  I agree to the
                  <a href="term.txt"  target="_blank"  class="txt2 hov1">
                    Terms of User
                  </a>
                </span>
                 <span id='ter'></span><br>
              </label>
          </div>
        </div>
          
        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn" id="login">
                Valider
              </button>
            </div>

            <a href="index.html" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
        Annuler
              <i></i>
            </a>
          </div>
        </form>
      

          

    </div>
  </div>


   </section>

       

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
     
    
      <script>
            var formValid = document.getElementById('login');
           

            var prenom1= document.getElementById('mail');
            var missPrenom1 = document.getElementById('email');
            var termuse= document.getElementById('ter');
            var radd= document.getElementById('r');
            var checkBox = document.getElementById("ckb");
            var rad = document.getElementById("one");
            var rad1 = document.getElementById("two");
            var msg = document.getElementById("test");
            var cont = document.getElementById("con");
            var usernameValid=/^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
            var emailValid= /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i; 
            formValid.addEventListener('click', validation);
            

            function validation(event){
      
             


                 if ((prenom1.validity.valueMissing==false && usernameValid.test(prenom1.value) == false) &&(prenom1.validity.valueMissing==false && emailValid.test(prenom1.value))  == false){
                    event.preventDefault();
                    missPrenom1.textContent = 'user name or mail invalid';
                    missPrenom1.style.color = 'orange';
                }
                else { missPrenom1.textContent = '';  }
                if (rad.checked == false && rad1.checked==false) {
                    event.preventDefault();
                    radd.textContent = 'veuillez choisir un type';
                    radd.style.color = 'orange';
                }
                else { radd.textContent = '';  }
            
if (checkBox.checked == false) {
                    event.preventDefault();
                    termuse.textContent = 'vous devez accepter les conditions d"utilisation pour continuer  ';
                    termuse.style.color = 'orange';
                }
                else { termuse.textContent = '';  }
           if (msg.value=='') {
                    event.preventDefault();
                    con.textContent = 'vous devez remplir ce champ   ';
                    con.style.color = 'orange';
                }
                else { con.textContent = '';  } 
}

 function previewFile(){
       var preview = document.getElementById('output');
       var file    = document.querySelector('input[type=file]').files[0]; 
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;
       }

       if (file) {
           reader.readAsDataURL(file); 
       } else {
           preview.src = "https://vignette.wikia.nocookie.net/desencyclopedie/images/4/4d/Image_blanche.png/revision/latest?cb=20101103154301";
       }
  }

  previewFile(); 

        </script>
        <script>
  function validation() {
window.open('image.php?mavar=change photo','Change photo','width=300, height=300');
}
</script>

  </body>
</html>