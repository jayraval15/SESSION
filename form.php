<?php
  session_start();
  if(isset($_POST['uname'])){
    header("location:prefrns.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="demo-container">
<div class="container">
<div class="row">
<div class="col-lg-6 col-12 mx-auto">
<div class="p-5 bg-white rounded shadow-lg">
          <h3 class="mb-2 text-center pt-5">LOG IN</h3>
          <form action="login_join.php" method="post">
            <label class="font-500">Email</label>
            <input name="email" class="form-control form-control-lg mb-3" type="email">
             <label class="font-500">Password</label>
            <input name="password" class="form-control form-control-lg" type="password">
            <button class="btn btn-primary btn-lg w-100 shadow-lg" type="submit" name="login">LOGIN</button>
          </form>
         <div class="text-center pt-4">
          <p class="m-0">Do not have an account? <a href="reg_form.php" class="text-dark font-weight-bold">sign up</a></p>
        </div>          
        </div>    
</div>
</div>
</div>
</div>
</body>
</html>