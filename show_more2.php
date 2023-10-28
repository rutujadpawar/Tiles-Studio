<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <img src="images/logo6.png"  position="absolute">

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="products.php">Products</a>
      <a href="book.php">book</a>
<a href="Login.php">Login/Sign in</a>

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<section class="packages">

   <h1 class="heading-title">Kitchen Products</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="Images/kitchen/sink.jpg">
         </div>
         <div class="content">
            <h3>Kitchen Sink</h3>
            
            <a href="Viewkitchensink.php" class="btn">View</a>
         </div>
      </div>
   



      <div class="box">
         <div class="image">
            <img src="Images/kitchen/kitchenwall.jpg">
         </div>
         <div class="content">
            <h3>Kitchen Wall Tiles</h3>
            
            <a href="Viewkitchenwall.php" class="btn">View</a>
         </div>
      </div>
</div>
</section>

<!-- packages section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>