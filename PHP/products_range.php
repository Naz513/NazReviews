<?php
$connect = mysqli_connect("localhost", "root", "", "mis_thursday");
$query = "SELECT * FROM product ORDER BY product_price desc";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Movie Review Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scaled=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {

            $("#button_product").click(function () {
                $("#jquery_external").load("../TextFiles/external.txt");
            });

            $("#button_product2").click(function () {
                $("#jquery_external2").load("../TextFiles/external.txt");
            });

            $("#button_product3").click(function () {
                $("#jquery_external3").load("../TextFiles/external.txt");
            });

            $("#button_product4").click(function () {
                $("#jquery_external4").load("../TextFiles/external.txt");
            });

            $("#button_product5").click(function () {
                $("#jquery_external5").load("../TextFiles/external.txt");
            });

            $("#button_product6").click(function () {
                $("#jquery_external6").load("../TextFiles/external.txt");
            });

        })
    </script>

    <style>
        <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            margin: 0;s
        }

        .header {
            padding: 80px;
            text-align: center;
            background: #3700B3;
            color: #03DAC5;
        }

        .header h1 {
            font-size: 40px;
            color: white;
        }

        .header2 {
            padding: 25px;
            text-align: center;
            background: #3700B3;
            color: white;
        }

        .header2 h1 {
            font-size: 40px;
            color: white;
        }

        .header2 p {
            color: white;
        }

        .navbar1 {
            overflow: hidden;
            background-color: #6200EE;
            position: sticky;
            position: -webkit-sticky;
            top: 0;
        }

        .navbar1 a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }


        .navbar1 a:hover {
            background-color: #03DAC5;
            color: white;
        }

        .navbar1 a.active {
            background-color: #03DAC5;
            color: white;
            font-weight: bold;
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .side {
            -ms-flex: 30%;
            flex: 30%;
            background-color: white;
            padding: 20px;
        }

        .main {
            -ms-flex: 70%;
            flex: 70%;
            background-color: white;
            padding: 20px;
        }

        .main2 {
            -ms-flex: 100%;
            flex: 100%;
            padding: 20px;
        }

        .main3 {
            -ms-flex: 100%;
            flex: 100%;
            padding: 40px;
        }

        img {
            height: 300px;
            width: 200px;
        }

        /*PRODUCT PAGE----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

        .product-item {
            width: 30%;
            float: left;
            margin: 4em 0;
            padding-left: 10%;

        }

        .product-img img {
            align-content: center;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .product-title h4 {
            text-align: center;
        }

        .product-title p {
            text-align: center;
        }

        .product-button button {
            width: 100%;
            border: none;
            font-weight: bold;
            background-color: #03DAC5;
            height: 35px;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .product-button button:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }

        .product-button-read button {
            margin-bottom: 1em;
            width: 100%;
            height: 35px;
            border: none;
            color: white;
            display: inline-block;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .product-button-read button {
            background-color: white;
            color: black;
            border: 2px solid #3700B3;
        }

        .product-button-read button:hover {
            background-color: #3700B3;
            color: white;
        }

        /*END of Product Page-------------------------------------------------------------------------------------------------------------------------------------------------------------------*/


        /*FOOTER------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
        .footer {
            padding: 20px;
            text-align: center;
            background: #6200EE;
        }

        #footercolor {
            color: white;
        }
        /*END OF FOOTER--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/


        @media screen and (max-width: 700px) {
            .row {
                flex-direction: column;
            }
        }

        @media screen and (max-width: 400px) {
            .navbar a {
                float: none;
                width: 100%;
            }
        }
    </style>




</head>
<body>
<!-- Header -->
<div class="header" id="home">
    <h1>NazReviews</h1>
    <p>A <b>Book Review</b> website created by <b>Mohd Nazmus Saquib</b></p>
</div>

<!-- END OF HEADER -->


<!-- NAVIGATION -->
<div class="navbar1">
    <a href="../mis_thur_contactus_Saquib.html">Home</a>
    <a href="../mis_thur_contactus_Saquib.html#featuredbooks">Featured Books</a>
    <a href="#product-page" class="active">Product</a>
    <a href="../mis_thur_contactus_Saquib.html#about">About US</a>
    <a href="../mis_thur_contactus_Saquib.html#team">The Team</a>
    <a href="../mis_thur_contactus_Saquib.html#blog">Blog</a>
    <a href="../mis_thur_contactus_Saquib.html#contact">Contact</a>
</div>
<!-- END OF NAVIGATION -->

<!-- Header -->
<div class="header2" id="product-page">
    <h1>Products</h1>
    <p>Here is a list of the books we sell, please add to cart to enjoy the books!</p>
</div>
<!-- END of Header -->

<!-- Product Page -->

<br>
<br>
<div style="width: 100%;">
    <h2 align="center">
        Price Range - Search Criteria
    </h2>    
    <br>
    <br>
    <div align="center">
        <input type="range" min="10" max="100" step="10" value="0" id="min_price" name="min_price" />
        <br>
        <span id="price_range">
            
        </span>
    </div>
    <br>
    <br>
    <br>
    <div class="row" id="product_loading">
        <?php
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result))
            {
                ?>
                <div class="product-item">
                    <div style="padding:12px; margin-bottom:16px;" align="center">
                        <img style="padding-bottom: 4%;" src="<?php echo $row["product_image"];?>" class="product-img" />
                        <h4 class="product-title"><?php echo $row["product_name"]; ?></h4>
                        <p id="<?php echo $row["jquery_external"];?>">Price - <?php echo $row["product_price"]; ?></p>
                        <div class="product-button-read">
                            <button>Read More</button>
                        </div>
                        <div class="product-button">
                            <button  id="<?php echo $row["product_button"];?>">Add to Cart!</button>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>

<!-- END of Product Page -->

<!-- FOOTER-->
<div class="footer">
    <h2 id="footercolor">&copy Copyright, Created by: Mohd Nazmus Saquib</h2>
</div>
<!-- END OF FOOTER -->
</body>
</html>



<script>
    $(document).ready(function(){
        $('#min_price').change(function(){
            var price = $(this).val();
            $("#price_range").text("Product under Price $" + price);
            $.ajax({
                url:"load_product.php",
                method:"POST",
                data:{price:price},
                success:function(data){
                    $("#product_loading").fadeIn(500).html(data);
                }
            });
        });
    });
</script>

