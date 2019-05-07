<!DOCTYPE html>
<html>
<head>
	
<style type="text/css">

#walid{
width: 80px;
border-radius: 2px;
font-size: 16px;

}
a{  
	
	text-align: center;
	font-size: 16px;
	font-family: "Arial Black";
	
	color: #A9A7A6;
}

a:hover {
  color:crimson;
}



.menu-toggle{
	position: fixed;
	top: 2.5rem;
	right: 2.5rem;
	color: #351B1B;
	font-size: 3rem;
	cursor: pointer;
	z-index: 1000;
	display: none;
}

nav{
	padding-top: 5rem;
	display: flex;
	justify-content: space-between;
	align-items: center;
	text-transform: uppercase;
	font-size: 1.6rem;
}











nav ul li a::before,
nav ul li a::after{
	content: '';
	position: absolute;
	width: 100%;
	height: 2px;
	background-color: crimson;
	left: 0;
	transform: scaleX(0);
	transition: all .5s;
}

nav ul li a::before{
	top: 0;
	transform-origin: left;
}

nav ul li a::after{
	bottom: 0;
	transform-origin: right;
}



nav ul li a:hover::before,
nav ul li a:hover::after{
	transform: scaleX(1);
}

@keyframes slideIn {
	from{

	}
	to{
		transform: translateX(0);
	}
}

@media screen and (max-width: 700px){


	

	
  
}
</style>
<script type="text/javascript">
	var open = document.getElementById('hamburger');
var changeIcon = true;

open.addEventListener("click", function(){

    var overlay = document.querySelector('.overlay');
    var nav = document.querySelector('nav');
    var icon = document.querySelector('.menu-toggle i');

    overlay.classList.toggle("menu-open");
    nav.classList.toggle("menu-open");

    if (changeIcon) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");

        changeIcon = false;
    }
    else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
        changeIcon = true;
    }
});
</script>
</head>
<body>


<header>
        
        
        
            <nav class="navbar navbar-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light">
           
                    
                   
                <ul>
                    <li><a  href="#">Home</a></li>
                    
                </ul>
                <ul> <li><a href="#">abonements</a></li>
                    
                </ul>
                <ul>
                    <li><a href="#">coaches</a></li>
                    
                </ul>
                
                  <ul> <img width="120px" style="position: relative; right: -12%; top: 10px;" src="1.png">
                    
                </ul>
                 
                 <ul> <li><a href="#">produits</a></li>
                    
                </ul>
                 <ul> <li><a href="#">inscription</a></li>
                    
                </ul>
                 <ul> <li><a  id="walid" class="btn-custom py-4" href="#">login</a></li>
                    
                </ul>
            </nav>
      
</header>
</body>
</html>