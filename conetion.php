<?php
    session_start();

$hostname = "localhost";
$user = "root";
$dbpass = "";
$dbname = "l_r_table";
$tablename = "transfor";

$conn = mysqli_connect($hostname,$user,$dbpass,$dbname);

if($conn){
    echo "";
}else{
echo "conn if error";
}
?>