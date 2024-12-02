<?php
include "inc/connection.php";
$email=$_POST['txtEmail'];
$password=$_POST['txtPassword'];
$sql="SELECT * FROM gym WHERE db_email='$email' AND db_password='$password'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    header("Location:main.html");
}
else{
    header("Location:login.php?error=1");
}
?>