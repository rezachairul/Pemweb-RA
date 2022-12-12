<?php 
include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data </title>
</head>
<body>

<form id="form_mahasiswa">
<td>Prodi</td>
<select name="prodi" id="prodi">
    <option value="">Pilih Program Studi</option>
<option value="Teknik Informatika">Teknik Informatika</option>
<option value="Teknik Elektro">Teknik Elektro</option>
<option value="Teknik Mesin">Teknik Mesin</option>
<option value="Teknik Geofisika">Teknik Geofisika</option>
<option value="Teknik Geologi">Teknik Geologi</option>
<option value="Teknik Sipil">Teknik Sipil</option>
</select>
</form>
<br>

<div id="tampil_data">
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>Program Studi</th>
        </tr>
</table>

<script src = "https://code.jquery.com/jquery-3.6.1.min.js"
integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
crossorigin = "anonymous">
</script>
<script>
$(document).ready(function(){
    $("#prodi").change(function(){
        var value=$(this).val();
    $.ajax({
        url:"tampil.php",
        type:"POST",
        data:"request=" + value,
        success:function(data){
            $("#tampil_data").html(data);
        }
    }) 
});
});
</script>
</head>
</body>
</html>