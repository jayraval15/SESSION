<?php
require_once("conetion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <form action="form_join.php" method="post">
<div class="demo-container">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12 mx-auto">
        <div class="text-center image-size-small position-relative" id="logo">
                <img src="https://annedece.sirv.com/Images/user-vector.jpg" class="rounded-circle p-2 bg-white">
                <center><input type="file"  class="photo" id="img"> </center>
     <i id="icon" class="lni lni-camera"></i> 
        </div>
        </div>
        
        <div class="p-5 bg-white rounded shadow-lg" ><br><br>    
          
          <h3 class="mb-2 text-center pt-5">Sign In</h3>
          <p class="text-center lead">Sign In to manage all your devices</p>
         
          <label class="font-500">user name</label>
            <input name="uname" class="form-control form-control-lg mb-3" type="text"> 

            <label class="font-500">Email</label>
            <input name="email" class="form-control form-control-lg mb-3" type="email">

            <div class="input-gruop lg" >  
              <span class="input-group-addon" onclick="mypass()"> <i class="bi bi-eye" id="togglepassword"></i><i class="bi bi-eye-slash" id="togglepassword1" hidden></i> 
             <label class="font-500">Password</label>
            <input name="password" id="password" class="form-control form-control-lg" type="password"><br> 
          
          </span>  
          </div>
          
            <label class="font-500">Conform Password</label>
            <span class="input-group-addon" onclick="mypassword()"  ><i class="fa fa-lock" aria-hidden="true"></i>
            <input name="password1" class="form-control form-control-lg" id="password2" type="password"><br>
            <i class="bi bi-eye" id="togglepassword2"></i><i class="bi bi-eye-slash" id="togglepassword3" hidden></i>
            </span>
            <button class="btn btn-primary btn-lg w-100 shadow-lg" name="submit" onclick="submitcom()" id="submit" type="submit">SIGN IN</button>
          
         <div class="text-center pt-4">
          <p class="m-0">Do not have an account? <a href="form.php" class="text-dark font-weight-bold">log in</a></p>
        </div>          
        </div>        
      </div>
    </div>
  </div>
</div>
<script>
    const image = document.querySelector("img"),
    input = document.querySelector("input");

    input.addEventListener("change", () => {
        image.src = URL.createObjectURL(input.files[0]);
    } );

    var imageinput = document.getElementById("img");
    logo.addEventListener("click", () => {
      imageinput.click();
    });

function mypass(){
    const togglepassword = document.getElementById("togglepassword");
    const password = document.getElementById("password");
    togglepassword.addEventListener("click", () => {
     (password.type === "password");
     password.type = "text";
     togglepassword.classList.add("bi-eye-slash");
     togglepassword.classList.remove("bi-eye");
    
    });
    
    const togglepassword1 = document.getElementById("togglepassword1");
    const password1 = document.getElementById("password1");
    togglepassword1.addEventListener("click", () => {
      (password1.type === "password");
      password1.type = "text";
      togglepassword1.classList.add("bi-eye-slash");
      togglepassword1.classList.remove("bi-eye");
    });
  }
  function mypassword(){

      const togglepassword2 = document.getElementById("togglepassword2");
      const password2 = document.getElementById("password2");
      togglepassword2.addEventListener("click", () => {
        (password2.type === "password");
        password2.type = "text";
        togglepassword2.classList.add("bi-eye-slash");
        togglepassword2.classList.remove("bi-eye");
        });
      const togglepassword3 = document.getElementById("togglepassword3");
      const password3 = document.getElementById("password3");
      togglepassword3.addEventListener("click", () => {
        (password3.type === "password");
        password3.type = "text";
      });
      
    }
    function submitcom(){
      const submit = document.getElementById("submit");
    const password =document.getElementById("password").value;
    const password2 =document.getElementById("password2").value;
    
      if(password===password2){
        submit.disabled = false;
        alert("your data saved");

      }else{
        submit.disabled = true;
        alert("passwords do not match");
      }

  } 

</script>
</form>
</body>
</html>