<?php
$connect = mysqli_connect("localhost", "root", "", "mis_thursday");
if(isset($_POST["datetime"]))
{
    $output = '';
    $query = "SELECT * FROM blog ORDER BY blog_id desc";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $output .= '  
                     <div class="col-md-12">
                    <div style="border:1px solid #ccc; background-color:#ccc; padding:12px; margin-bottom:16px; min-height:250px; width:100%;">
                        <h4>'.$row["blog_username"].'</h4>
                        <h5>'.$row["datetime"].'</h5>
                        <h3>Title:<br> '.$row["blog_title"].'</h3>
                        <p>Comment:<br> '.$row["blog_comment"].'</p>
                    </div>
                </div>
                ';
        }
    }
    else
    {
        $output = "No Blog Found";
    }
    echo $output;
}
?>