<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $Profile = $_POST["ProductDescription"];
    $Price = $_POST["ListPrice"];
    $Discount = $_POST["DiscountPercent"];
    $DiscountAmount = $Price * $Discount * 0.01;
    $DiscountPrice = $Price - $DiscountAmount;
    echo $Profile."Gia sau khi chiet khau con".$DiscountPrice;
}


