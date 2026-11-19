<?php include "connect.php"; ?>


<h2>Tambah Produk</h2>


<form method="POST">
    Nama: <input type="text" name="nama"><br>
    Harga: <input type="number" name="harga"><br>
    <button type="submit" name="simpan">Simpan</button>
</form>


<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];


    mysqli_query($connect, "INSERT INTO products (ProductName, UnitPrice)
    VALUES ('$nama', '$harga')");


    header("Location: products.php");
}
?>