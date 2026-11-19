<?php
    include("connect.php");
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE from products where ProductID = $id");
    header("location: product.php");
?>