<table border="1">
<tr>
<th> No. </th>
<th> NIM </th>
<th> Nama </th>
<th> Program Studi </th>
</tr>
<?php

include "koneksi.php";
$request = $_POST['request'];
$sql = "SELECT * FROM prodi_mahasiswa WHERE prodi = '$request'";
$query = mysqli_query($conn, $sql);
$no = 1;
while ($data = mysqli_fetch_array($query)){
    echo "<tr>";

    echo "<td>".$no++;"</td>";
    echo "<td>".$data['nim']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['prodi']."</td>";


    echo "</tr>";
}
?>
</table>