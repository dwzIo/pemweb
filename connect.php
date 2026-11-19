<?php 
    $connect = new mysqli("localhost", "root", "", "jokoresto");
    if ($connect->connect_error) {
        die("koneksi gagal: " . $connect->connect_error);
    }
?>