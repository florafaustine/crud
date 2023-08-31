<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql=" delete from doctor where id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
       // echo "data deleted";
        header('location:table.php');
    }else{
        die(mysqli-error($con));
    }
}
?>