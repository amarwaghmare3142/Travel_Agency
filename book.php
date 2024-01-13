<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>about</title>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<link rel="stylesheet" href="style2.css">
</head>
<body>


<!-- header section starts-->

<section class="header">
     
   <a href="home.php" class="logo">A4 TRAVEL</a>

  <nav class="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="package.php">Package</a>
    <a href="book.php">Book</a>
  </nav>

  <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
  <h1> book now </h1>
</div>

<!-- booking section starts -->

<section class="booking">
<h1 class="heading-title">book your trip!</h1>
<form action="book_form.php" method="post" class="book-form">
<div class="flex">

<div class="inputBox">
<span>name :</span>
<input type="text" placeholder="enter your name" name="name">
</div>

<div class="inputBox">
<span>email :</span>
<input type="text" placeholder="enter your email" name="email">
</div>

<div class="inputBox">
<span>phone :</span>
<input type="text" placeholder="enter your number " name="phone">
</div>

<div class="inputBox">
<span>address :</span>
<input type="text" placeholder="enter your address" name="address">
</div>


<div class="inputBox">
<span>where to :</span>
<input type="text" placeholder=" place you want to visit" name="location">
</div>

<div class="inputBox">
<span>how many guests:</span>
<input type="number" placeholder="how many guests" name="guests">
</div>


<div class="inputBox">
<span>arrivals :</span>
<input type="date"  name="arrivals">
</div>

<div class="inputBox">
<span>leaving:</span>
<input type="date"  name="leaving">
</div>
</div>
<input type ="submit"  value="submit" class="btn"  name="send" >


</form>




</section>

<!-- booking section ends -->

<!--submit box-->

















<!--footer section starts-->

<section class="footer">
   

   <div class="credit">Created by <span>A4 Designers</span> | All Rights Reserved &#169; </div>   


   <!--footer section end-->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="./js/script.js"></script>



</body>
</html>    
