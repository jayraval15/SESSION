<?php
require_once("conetion.php");

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM $tablename WHERE `email` = '$email' AND `password` = '$password'" or die("query error");

    $result = mysqli_query($conn, $query) or die("login error");
    
    $deta = mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result)>0){
        $_SESSION['password'] = $deta['password'];
        $_SESSION['email'] = $deta['email'];
        $_SESSION['id'] = $deta['id'];
        header("location:prefrns.php");
    }
    else{
        echo "invet not velid";
    }
}
?>