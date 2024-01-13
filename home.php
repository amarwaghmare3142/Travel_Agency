<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>home</title>

<!--swiper css link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

<!-- font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link -->
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


<!-- Slideshow container -->
<section class="home1">
<div class="capital">
  <span class="Asize">
  <img src="./images/Logo.jpeg" alt=""></span>
  <h1 class="tourssize"> A4 Travel Agency</h1>  
</div>
<div class="slider-containerm">
<div class="slidem">
        <img src="./Images_project/mounatin_3.gif" class="slide-img" loop autoplay muted alt=""/>
        <h1 class="explore">Life is Short and World is Wide</h1>
      </div>
      <div class="slidem">
        <img src="./Images_project/mounatin_2.gif" class="slide-img" alt="" />
        <h1 class="explore">Explore India with Us</h1>
      </div>
      <div class="slidem">
        <img src="./images/waterfall.gif" 
        class="slide-img" alt="" />
        <h1 class="explore">Trust Our Experience</h1>
      </div>
      <div class="slidem">
          <img src="./Images_project/travel.gif" class="slide-img" alt="" />
          <h1 class="explore">Travel Around with Us</h1>
      </div>
    </div>
    <div class="btn-containerm">
      <button type="button" class="prevBtn">
        prev
      </button>
      <button type="button" class="nextBtn">
        next
      </button>
    </div> 


<!--services section starts-->

<section class="services">
  
  <hl class="heading-title"> our services </hl>
  
  <div class="box-container">
  
    <div class="boxadventure">
       <img src="./images/adventure.jpeg" alt="">
       <h3>adventure</h3>
    </div>
  
    <div class="boxguide">
       <img src="./images/tourguide.jpeg" alt="">
       <h3>tour guide</h3>
    </div>
  
    <div class="boxtrecking">
       <img src="./images/trekking.jpeg" alt="">
       <h3>trekking</h3>
    </div>
    
    <div class="boxfire">
       <img src="./images/fire.jpeg" alt="">
        <h3>camp fire</h3>
    </div>
    
    <div class="boxboat">
       <img src="./images/boating.jpeg" alt="">
        <h3>boating</h3>
    </div>

    <div class="boxcamp">
       <img src="./images/camping.jpeg" alt="">
       <h3>camping</h3>
    </div>  

  </div>

</section>

<!--services section end-->


<!--home about section starts-->

<section class="home-about">

  <div class="image">
    <img src="./images/about.webp" alt=""> 
  </div>
  
  <div class="content">
    <h3>about us</h3>

    <h3>"A4 Travel Agency"</h3>
    <p>
“Travel is the main thing you purchase that makes you more extravagant”. We, at 'A4 Travel Agency', swear by this and put stock in satisfying travel dreams that make you perpetually rich constantly....</p>
    <a href="about.php" class="btn">read more</a>
  </div>
  
</section>
<!--home about section ends-->

<!--home packages section starts-->

<section class="home-packages">
  
  <hl class="heading"> Our Packages </hl>
  
  <div class="box-container">
  
     <div class="box">
        <div class="image">
          <img src="./images/delhi.jpeg" alt="">
        </div>
        <div class="content">
           <h3>Delhi</h3>
           <p>It is home to three World Heritage monuments—Qutub Minar, Red Fort and Humayun's Tomb that have survived many centuries, and give an idea of architectural wonders created by emperors in the past.</p>
           <a href="book.php" class="btn">book now</a>
        </div>
      </div>
      
      <div class="box">
        <div class="image">
          <img src="images/Sikkim.webp" alt="">
        </div>
        <div class="content">
           <h3>Sikkim</h3>
           <p>Sikkim is one of the most famous tourist destinations in North East India. Its marvellous landscape is dotted with high altitude lakes, rolling green mountains, colourful rhododendron groves, azure rivers, milky waterfalls, beautiful monasteries and unparalleled views of Mt.</p>
           <a href="book.php" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/Nainital1.jpg" alt="">
        </div>
        <div class="content">
           <h3>Nainital</h3>
           <p>Nainital, the charming Himalayan lake town, is a picture-postcard perfect hill-station and one of the most popular in Northern India. Commonly known as the 'Lake District', Nainital is nestled high up in the Kumaon Himalayas at an altitude of around 2,000 m above sea level.</p>
           <a href="book.php" class="btn">book now</a>
        </div>
      </div>
  
  </div>

  <div class="load-more"><a href="package.php" class="btn">load more</a></div>
  
</section>

<!--home packages section ends-->


<!-- home offer section starts-->
<section class="home-offer">
<div class="content">
<h3 style="color:#ff0202;">upto 20% off</h3>
<p style="font-size:1.7rem">We know how much you love the holidays, so we've decided to give you a little treat. Here's 20% off on our packages. Use code: [A4Boyzz]. Valid till: [30th May 2023].</p>
<a href="book.php" class="btn">book now</a>
</div>
</section>
<!-- home offer section ends -->


<!--footer section starts-->

<section class="footer">

  <div class="box-container">

     <div class="box">
       <h3>quick links</h3>
       <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
       <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
       <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
       <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
     </div>
     <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>
      
      <div class="box">
        <h3>Contact info</h3>
        <a href="#"> <i class=" fas fa-phone"></i> 9307125205 </a>
        <a href="#"> <i class=" fas fa-phone"></i> 9657083320 </a>
        <a href="#"> <i class=" fas fa-phone"></i> 7499658816 </a>
        <a href="#"> <i class=" fas fa-phone"></i> 9049886243</a>
     
      
      </div> 
     <div class="box">
      <h3>Email</h3>
      <a href="#"> <i class="fas fa-envelope"><span class="emailposition">aayushmankar32@gmail.com</span></i> </a>
        <a href="#"> <i class="fas fa-envelope"  ><span class="emailposition2">amarwaghmare@gmail.com</span></i> </a>
        <a href="#"> <i class="fas fa-envelope" ><span class="emailposition3">akashpore12092001@gmail.com</span></i>  </a>
        <a href="#"> <i class="fas fa-envelope" ><span class="emailposition4"> imatharv18@gmail.com </span></i></a>
      </div>
     
      
     

    </div>      

   <div class="credit">Created by <span>A4 Designers</span> | All Rights Reserved &#169; </div>   

</section>

   <!--footer section end-->
<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


</body>
</html>    

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="script.js"></script>
</body>


</html>