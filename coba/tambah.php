<?php
include "koneksi.php";
?>

<form method="POST">
    nama: <input type="text" name="nama">
    kelas: <input type="text" name="kelas">
    <button type="submit" name="submit"></button>
</form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    mysqli_query($conn, "INSERT into nama table ('kolom 1', 'kolom 2') values ($nama, $kelas)");

    header("location: tabel.php");
}


?>