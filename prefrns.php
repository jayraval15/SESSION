<?php
session_start();

if(isset($_SESSION['uname'])){
    header('location:form.php');
}
echo "welcome".$_SESSION['email'];

?><form action="log_out.php" method="post">
<input type="submit" value="logout">

</form>