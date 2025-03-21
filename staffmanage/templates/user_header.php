<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\asset\css_user\home-css.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Galada' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.css'><link rel="stylesheet" href="..\asset\css_user\home-css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css'>
<link rel='stylesheet' href='https://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css'><link rel="stylesheet" href="..\asset\css_user\home-css.css">

</head>
<body>
  <nav class="navbar">
    <div class="logo">
        <h1>Travel</h1>
    </div>         
    <ul class="nav-menu">
        <li class="nav-item"><a href="#home">Home</a></li>
        <li class="nav-item"><a href="#about">About us</a></li>
        <li class="nav-item"><a href="login.php"><i class="material-icons">person</i></a></li>
        <li class="nav-item"><a href="#"><i class="material-icons">shopping_cart</i></a></li>

    </ul>
    <div class="mobile-view">
        <ul class="mobile-tab">
          <li><a href="#home"><i class='fa fa-home'></i></a>
            <span class="tooltiptext">Home</span>
        </li>
        <li><a href="#packages"><i class="fa fa-map-o" aria-hidden="true"></i></a>
          <span class="tooltiptext">Destinations</span>
        </li>
        <li ><a href="#"><i class="material-icons">shopping_cart</i></a>
            <span class="tooltiptext">Cart</span>
        </li>
          <li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a>
            <span class="tooltiptext">Profile</span>
        </li>
        </ul>
    </div>
 
</nav>
<script type="text/javascript">
      window.addEventListener("scroll",function(){
        var nav =document.querySelector("nav");
        nav.classList.toggle("sticky",window.scrollY>50);
          })
</script>

<button onclick="topFunction()" id="myBtn"  class="scroll"><i class="material-icons">keyboard_arrow_up</i></button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
  mybutton.style.display = "block";
} else {
  mybutton.style.display = "none";
}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}
  </script>