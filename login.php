

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .image-container {
          height: 90%;
          width: 90%;
          z-index: 3;
        display: none;
        }
      
        .image-container img {
          max-width: 100%;
          height: 100%;
          
        }
      
        .image-container .text-overlay {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          background-color:blue;
          padding: 10px;
          text-align: center;
        }
      </style>
</head>
<body>
<center> <div class="front" id="front">
<h1>Login</h1>
    <button type="button"class="btn btn-primary" onclick="myFunction()">register here</button><br><br>
    <form method="post" action="validate.php"  >
       <div> <label for="" class="mb-3">Username</label>
        <input type="text" name="user_name1" placeholder="Username" required><br><br></div>
       <div> <label for=""class="mb-3">Password</label>
        <input type="password" name="password1" placeholder="Password" required><br><br></div>
       <div><p class="text-light"><a href="forgot.php">Forgot password?</a> <input type="radio" style="padding-left:20px"; class="text-light"><a href="">remember me</a></p>
      </div> 
        <button type="submit" name="login"style="widht:100px; " class="btn btn-primary">Log In</button>
        <p>don't have an account?<a href="signin.php" class="text-decoration" >registration now</a></p>
</div>
    </form></center>
 



    <div >
 <b><div class="image-container" id ="example">
            <img src="./download (2).jpg" alt="" style="width:100%; height:50%;">
          <div class="text-overlay"><br><br><br><br><br>
        <form action="validate.php" method="post" class="container">
            <center><h1 padding-top:30px>CREATE AN ACCOUNT</h1></center>
            <label for="user name" class="mb-3">first_name</label><br>
            <input type="text" name="first_name" required><br><br>
            <label for="last_ name" class="mb-3">last_name</label><br>
            <input type="text" name="last_name" required><br><br>
            <label for="user name" class="mb-3">user_name</label><br>
            <input type="text" name="user_name" required><br><br>
            <label for="email" required> E-mail</label><br>
            <input type="emaill" name="email"><br><br>
            <Label>password</Label><br>
            <input type="password" name="password" required><br><br>
            <label for="role"  class="mb-3" required>Role</label><br>
            <select name="role" id="">
              <option value="111">Doctor</option>
              <option value="222">Nurse</option>
              <option value="333">Phamacist</option>
              <option value="444">Patient</option>
              <option value="555">admin</option>

            </select>
            <input type="submit">
            
           
           
        </form>
          </div>
        </div>
        </b>
     </div>
     <script>
function myFunction(){
    document.getElementById("example").style.display="block";
    document.getElementById("front").style.display="none";

}
     </script>
</body>
</html>

<?php
session_start();
?>