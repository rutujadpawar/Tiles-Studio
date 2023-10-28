<?php
    session_start();
    $database_name = "Products_details";
    $con = mysqli_connect("localhost","root","",$database_name);
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
</head>
<body>

<!-- packages section starts  -->

<section class="packages">

   <h3 class="heading-title">Bath Tub</h3>
<h4>Why do you Need a Bathroom with Bathtub?</h4>
<h3>Resale value</h3>
<p>The more furnished and feature-rich your house is the more resale value it incurs. Surveys also state that most home buyers look at the bathroom aesthetics and appeal to evaluate their interest in the purchase. Hence, having a bathroom with bathtub will any day be more valuable than just a bathroom with a showerhead.</p>

<h3>Maximise compact space</h3>
<p>The situation in India is such that most are compact homes and hence bathrooms are also compact. Bathroom bathtubs are a great way to harness luxury in a limited bath space. Round luxury bathtubs can also be fitted in the master bathroom to alleviate the plush factor. Jaquar bath tub come in a variety of freestanding bathtubs like Alaska, Eggy, Julia, Saipan, Queens that can be installed with ease and grip even in small bathroom spaces. These are hands down the best bathtubs for a small bathroom.</p> 

<h3>Best for relaxing</h3>
<p>It's inevitable for you to have a rushed bath and scoot out of the shower in the case of a regular showerhead or even a handshower for that matter. However, in the presence of luxury bathtubs or even a simple Jaquar bath tub, you can unwind after a long tiring day by soaking in the warmth of the water and fragrance of a bath bomb surrounding you.it is a perfect investment for the ultimate rejuvenation. You can find plenty of designs for bath tub for adults in Jaquar that suit your budget. 
</p>
<h3>Best for kids in the family</h3>
<p>A fun and creative bathroom design idea for your toddler is to have a bathtub! If you have small kids in the family it is advisable to go for some of the best bathtubs even if not luxury bathtubs, as it makes the whole act of bathing easier and enjoyable for kids. It is safer as they are comfortably placed inside the tub. You can avoid any accidents from slippage when you buy bath tub. If you don’t have a huge space you can always purchase a quadrant bathtub for a small bathroom which can easily fit in a corner and save space. 
</p>



 <div class="container" style="width: 100%">
        <h2>Shopping Cart</h2>
        <?php
             $query = "SELECT * FROM image WHERE id= 7 OR id=8";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="image2">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>
</section>
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>