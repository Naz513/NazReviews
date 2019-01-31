<?php
$connect = mysqli_connect("localhost", "root", "", "mis_thursday");
$query = "SELECT * FROM blog ORDER BY blog_id desc";
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

    <script src="../JavaScript/contact_form.js"></script>


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

        /* BLOG PAGE-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

        .main4 {
            -ms-flex: 100%;
            flex: 100%;
            padding-left: 10%;
            padding-right: 10%;
            padding-top: 2%;
        }
        .card {
            padding: 20px;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
            margin-bottom: 50px;

        }

        .cardlegend {
            color: black;
            font-weight: lighter;
        }

        .card h2 {
            color: black;
        }

        .card h5 {
            color: black;
            font-weight: lighter;
        }

        .card img {
            width: 100%;
            padding: 20px;
        }

        .card button {
            width: 10%;
            border: none;
            font-weight: bold;
            background-color: #03DAC5;
            height: 35px;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .card button:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }





        /* END OF BLOG PAGE-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/


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
    <a href="../PHP/products_range.php#product-page">Product</a>
    <a href="../mis_thur_contactus_Saquib.html#about">About US</a>
    <a href="../mis_thur_contactus_Saquib.html#team">The Team</a>
    <a href="#blog" class="active">Blog</a>
    <a href="../mis_thur_contactus_Saquib.html#contact">Contact</a>
</div>
<!-- END OF NAVIGATION -->

<div class="header2" id="blog">
    <h1>Blog</h1>
</div>

<br>
<br>
<div class="container" style="width: 100%;">
    <h2 align="center">
        Thank you for posting to our Blogs!
    </h2>    
    <br>
    <br>

    <div id="blog_pull">
        <?php
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result))
            {
                ?>
                <div class="col-md-12">
                    <div style="border:1px; background-color:#ccc; solid #ccc; padding:12px; margin-bottom:16px; min-height:250px; width:100%;">
                        <h4><?php echo $row["blog_username"]; ?></h4>
                        <h5><?php echo $row["datetime"]; ?></h5>
                        <h3>Title:<br> <?php echo $row["blog_title"]; ?></h3>
                        <p>Comment:<br> <?php echo $row["blog_comment"]; ?></p>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>

<!-- FOOTER-->
<div class="footer">
    <h2 id="footercolor">&copy Copyright, Created by: Mohd Nazmus Saquib</h2>
</div>
<!-- END OF FOOTER -->

</body>
</html>

<script>
    $(document).ready(function(){
        $.ajax({
            url:"pull_blog_post.php",
            method:"POST",
            data:{blog_id:blog_id},
            success:function(data){
                $("#blog_pull").fadeIn(500).html(data);
            }
        });
    });
</script>

