<?php
    include("connect.php");
    // $query = $connect->query("SELECT * from products");

    // fetch_object sering dipakai
    // fetch_assoc sering dipakai
    // fetch_row
    // fetch_array

    
    // $data = $query->fetch_object();
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    
    // while ($data = $query->fetch_object()) {
        //     echo $data->ProductName . "<br>";
        // }
        
    // while ($data = $query->fetch_assoc()) {
    //     echo $data["ProductName"] . "<br>";
    // }
            
    // $product_id = $_GET["product_id"];
    // $query = $connect->query("SELECT * from products where ProductID = $product_id");
?>

<center>
    <h2>Data Products</h2>
    <a href="tambah.php">tambah data</a>
    
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
            $query = mysqli_query($connect, "SELECT * from products");
            while ($data = $query->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $data["ProductID"]?></td>
                    <td><?= $data["ProductName"]?></td>                
                    <td><?= $data["UnitPrice"]?></td>
                    <td><a href="edit.php?id=<?= $data["ProductID"] ?>">edit</a></td>
                    <td><a href="hapus.php?id=<?= $data["ProductID"] ?>">hapus</a></td>            
                </tr>
            <?php
            }
        ?>
    </table>
</center>
