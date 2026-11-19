<?php
include "koneksi.php";
$id = $_GET['id'];
mysqli_query($conn, "DELETE from table where id = $id");

header("location: tabel.php");