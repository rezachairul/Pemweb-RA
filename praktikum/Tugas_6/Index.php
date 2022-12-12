<?php
function BilRomawi($dataAngka) {
	 $datAngka = intval($dataAngka);
	 $root = '';
	 
	 $array = array('M' => 1000,
	 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
	 
	 foreach($array as $roman => $value) {
	  $matches = intval($dataAngka/$value);
	  $root .= str_repeat($roman,$matches);
	  $dataAngka = $dataAngka % $value;
	 
	 }
	 return $root;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATA</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  
  <form action="" method="POST">
    <table align="center"> 
      <tr align="center">
        <td><h2> 
            <b>KONVERSI ROMAWI</b>
        </h2></td>
    </tr>
      <tr> 
        <td>
        <table border="0" cellpadding="0" cellspacing="10" align="center">
          <tr>
            <td>ANGKA</td>
            <td> : </td>
            <td><input name="dataAngka" type="number" size="40"/></td>
          </tr>
            <td colspan="4" align="center">
              <br>
              <button class="buttonUP" role="button">KONVERSI</button>
            <h2>HURUF ROMAWI : <?php error_reporting(0); echo BilRomawi($_POST["dataAngka"]); ?><br></h2>
          </td>
          </tr>
        </table>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
<!-- HTML !-->

