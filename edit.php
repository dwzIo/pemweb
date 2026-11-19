<?php
include "connect.php";


$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM products WHERE ProductID = $id"));
?>


<h2>Edit Produk</h2>


<form method="POST">
    Nama: <input type="text" name="nama" value="<?=$data['ProductName']?>"><br>
    Harga: <input type="number" name="harga" value="<?=$data['UnitPrice']?>"><br>
    <button type="submit" name="update">Update</button>
</form>


<?php
if(isset($_POST['update'])){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];


    mysqli_query($connect, "UPDATE products SET
        ProductName='$nama',
        UnitPrice='$harga'
        WHERE ProductID=$id");


    header("Location: product.php");
}
?>