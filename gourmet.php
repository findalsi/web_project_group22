<?php
$title ="The Gourmet";

include "header.php" ?>

  <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/food_cover.jpg" alt="food cover" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/R.jpeg" alt="food" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

 <!-- Information Bar -->

 <div class = "section1">
 <div class="row">
   <div class="col-sm-4">
     <h3>address </h3>
     <p>Heidehofintie 33,</p> 
     <p>FI-01300 </p>
     <p>Vantaa, Finland</p>  
   </div>

   <div class="col-sm-4">
     <h3>hours</h3>
     <p>Sunday - Thursday</p>
     <p>4:30pm - 10pm</p>
     <p>‍Friday & Saturday</p>
     <p>4:30pm - 11pm</p>
  </div>

   <div class="col-sm-4">
     <h3>contact</h3>
     <p>041 000 0000</p>
     <p>info@thegourmet.com</p>
    </div>
  </div>
</div>


  <img src="images/Candlenut-Singapore.jpg" style="max-width:100%;height:auto;">

   <!--two iamges with The Gourmet info -->
   <div class = "section2">
   <div class = "row">
  <div class = "col-sm-2">
  </div>
  <div class="col-sm-2">
    <img src="images/2013-12-27-food14.jpg" style="height: 230px;" alt="food">
  </div>
  <div class="col-sm-2">
    <img src="images/kitchen.jpg" style="height: 230px;" alt="food">
  </div>
  <div class="col-sm-4">
      <h1>The Gourmet</h1> 
        <p>Here, at the Gourmet, in the centre of Tikkurila, we offer unique and delicious food. All our ingredients are sourced from local products to ensure quality and freshness which makes our menu more tasty and mouth watering. 
        Don’t hesitate to pay us a visit if you share our passion for fresh dishes cooked with only the best ingredients. We promise an experience that will keep you coming back for more.  </p>
    </div>
  <div class = "col-sm-2">
    </div>
  </div>
</div>


  <!--Reservation buttons -->
  
<div class="container-fluid">
    <img src="images/pexels-pixabay-262978.jpg"  alt="background image" width="1000" height="300" class="centre">
    <div class="centered">
      <h5>make a reservation</h5><br/>
      <div class="d-grid gap-3">
      <button class="button button5">Jan 18, 2024</button><br/>
      <button class="button button5">7.00 PM</button><br/>
      <button class="button button5">2 people</button><br/>
      <button type="button" class="btn1 btn-dark">find a table</button>
    </div>
</div>
</div>

<!--happenings-->
<div>
  <h6>happenings</h6>
</div>


<!--valentine's day dinner --> 
<div class = "row">
  <div class = "col-sm-2">
  </div>
  <div class = "col-sm-4" style="text-align: left; padding-right: 80px; padding-left: 80px;">
   <h7>Valentine's day dinner </h7><br>
    <h8>February 14</h8><br><br>
    <p class="text">Love on a Plate: Unlock Sweet Savings This Valentine's Day!" This Valentine's Day, the language of love through exquisite flavors. Explore our exclusive food discounts, crafted just for you. Make this Valentine's Day one to remember.</p>
    <button type="button" class="btn3 btn-dark">purchase gift cards</button>
  </div>
  <div class = "col-sm-4">
    <img class="img-fluid" src="images/shutterstock_561649213.jpg" alt="Valentine Couple">
  </div>
  <div class = "col-sm-2">
  </div>
</div>

 <!--Vantaa Restaurant Week  --> 
<div class = "row">
  <div class = "col-sm-2">
  </div>
  <div class = "col-sm-4">
    <img class="img-fluid" src="images/noodles boal.jpg" alt="noodles bowl">
  </div>
  <div class = "col-sm-4" style="text-align: center; padding-right: 80px; padding-left: 80px; padding-top:20px; padding-bottom:20px;">
    <h7>Vantaa Restaurant Week  </h7></br>
    <h7> 2024  </h7></br>
    <h8>January 24 - January 31</h8><br><br>
    <p class="text">Explore the wonders of Asian cuisine.Buy one main course and get the second at half price.</p>
    <button type="button" class="btn3 btn-dark">menu</button><br><br>
    <button type="button" class="btn3 btn-dark">reserve</button> </div>
  </div>
  <div class = "col-sm-2">
  </div>


 <!--Secret Garden Reserva Red--> 
 <div class = "row">
  <div class = "col-sm-2">
  </div>
  <div class = "col-sm-4" style="text-align: center; padding-right: 80px; padding-left: 80px; padding-top:20px;">
  <h7>Secret Garden</h7></br>
  <h7>Reserve Red</h7><br><br>
  <p class="text">Wine a Little, Laugh a Lot: Our Special Wine Drinks Are the Secret Ingredient to Unleashing Joy in Every Glass.</p>
    <button type="button" class="btn3 btn-dark">reserve</button>
  </div>
  <div class = "col-sm-4">
    <img class="img-fluid" src="images/wine+bar+home+page.jpg" alt="wine glass">
  </div>
  <div class = "col-sm-2">
  </div>
</div>

<?php
include "footer.php"  ?>
