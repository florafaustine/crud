<?php
include 'connection.php';
if(isset($_POST ['submit'])){
    $id=$_POST['id'];
    $doctor_name=$_POST['doctor_name'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $proffessional=$_POST['proffessional'];
    $gender=$_POST['gender'];
    $hospital_name=$_POST['hospital_name'];
    $region=$_POST['region'];
    $sql= "insert into doctor ( id,doctor_name,email,phone_number,proffessional,gender,hospital_name,region)  values('$id','$doctor_name','$email','$phone_number','$proffessional','$gender','$hospital_name','$region')";
    $result =mysqli_query( $con,$sql);
    if($result)
        echo 'data inserted successfully';
        //header('location: display.php');
    else{
        die(mysqli_error($con));
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>doctor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form  method="post">
        <div class="mb-3">
    <label for="" class="form-label" > id</label>
    <input type="number" name="id" class="form-control" placeholder="Enter your id" style="width:600px;">
  </div> 
           <div class="mb-3">
    <label for="" class="form-label" > Doctor_name</label>
    <input type="name" name="doctor_name" class="form-control" placeholder="Enter your name" style="width:600px;">
  </div>   
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"name="email" class="form-control" placeholder="Enter your email"style="width:600px;">
  </div>

    <div class="mb-3">
    <label for="" class="form-label">Phone_number</label>
    <input type="mobile"name="phone_number" class="form-control" placeholder="Enter your phone number"style="width:600px;" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPproffessional" class="form-label">Proffessional</label>
    <input type="proffessional" name="proffessional" class="form-control" placeholder="Enter your proffessional"style="width:600px;">
  </div> 
   <div class="mb-3">
  <label for="" class="form-label">Gender</label>
  <input type="gender"name="gender" class="form-control" placeholder="Enter your gender"style="width:600px;">
</div>
<div class="mb-3">
  <label for="" class="form-label">hospital_name</label>
  <input type="hospital_name"name="hospital_name" class="form-control" placeholder="Enter your hospital_name"style="width:600px;">
</div>
<div class="mb-3">
  <label for="" class="form-label">region</label>
  <input type="region"name="region" class="form-control" placeholder="Enter your region"style="width:600px;">
</div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"></label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </body>
</html