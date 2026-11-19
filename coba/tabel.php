<?php
include "koneksi.php";
?>

<table border="1" cellpadding=2>
<tr>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
</tr>
<?php
$query = mysqli_query($conn, "SELECT * from products");
while ($data = $query->fetch_assoc()) { ?>
<tr>
    <td><?= $data['id'] ?></td>
    <td></td>
    <td></td>
    <td></td>
</tr>

<?php }?>
</table>