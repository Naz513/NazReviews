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

<?php
$connect = mysqli_connect("localhost", "root", "", "mis_thursday");
if(isset($_POST["price"]))
{
    $output = '';
    $query = "SELECT * FROM product WHERE product_price <= ".$_POST['price']." ORDER BY product_price desc";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $output .= '  
                     <div class="product-item">  
                          <div style="padding:12px; margin-bottom:16px;" align="center">  
                               <img style="padding-bottom: 4%;" src="'.$row["product_image"].'" class="product-img" />  
                               <h4 class="product-title">'.$row["product_name"].'</h4>  
                               <p id="'.$row["jquery_external"].'">Price - '.$row["product_price"].'</p>  
                               <div class="product-button-read">
                                    <button>Read More</button>
                               </div>
                               <div class="product-button">
                                    <button id="'.$row["product_button"].'">Add to Cart!</button>
                               </div>
                          </div>  
                     </div>  
                ';
        }
    }
    else
    {
        $output = "No Product Found";
    }
    echo $output;
}
?>