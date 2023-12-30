<?php
include ('koneksi.php');

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($mysqli, "SELECT * from tb_login where username = '$email' and password = '$password' ");
$result = mysqli_num_rows($query);


if ($result > 0){
    header("location:../home.php");
}else{
    header("location:../login/login.php");
}

?>