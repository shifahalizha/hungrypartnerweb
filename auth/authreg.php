<?php
include ('koneksi.php');

$email = $_POST['email'];
$password = $_POST['pass'];

$query = mysqli_query($mysqli, "SELECT * from tb_login where username = '$email' and password = '$password' ");
$result = mysqli_num_rows($query);

$query_sql = "INSERT INTO tb_login (username, password) VALUES ('$email', '$password')";

if ($result > 0){
    header("location:../home.php");
}else{
    header("location:../login/login.php");
}

if (mysqli_query($mysqli, $query_sql)){
    header("location:../login/login.php");
}else{
    header("location:../login/register.php");
}

?>