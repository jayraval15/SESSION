<?php
require_once("conetion.php");

$uname = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];
$password1 = $_POST['password1'];

$query = "INSERT INTO $tablename (`username`,`email`,`password`,`cpassword`) value ('$uname','$email','$password','$password1')";

$result = mysqli_query($conn,$query);
if($result==1){
    echo "";
}else{
    echo "data not insert";
}
?>