
<?php 

$conn = mysqli_connect("localhost","root","","mapro");

// Check connection
if (mysqli_connect_errno()){
	echo "Connection failed : " . mysqli_connect_error();
}
?>