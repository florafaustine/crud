<?php
session_start();
if (isset($_SESSION['jina'])) {
    $jina = $_SESSION['jina'];
}

//connect to the database
$db_host = '127.0.0.1';
$db_database_name = 'geo';
$db_password = '';
$db_username = 'root';

$connection = mysqli_connect($db_host, $db_username, $db_password, $db_database_name);

if (!$connection) {
    die('Error connecting to the database');
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if both Gmail and password are entered
    if (empty($username) || empty($password)) {
        $error_message = "Please enter both username and password.";
    } else {
        // Check if the user exists and the credentials are correct
        $query = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
        $results = mysqli_query($connection, $query);
 
        if (!$results) {
            die('Error in database query: ' . mysqli_error($connection));
        }

        // Count the result to see if there is one user who has the same password and Gmail
        $count = mysqli_num_rows($results);
        
if ($count == 1) {
    while ($row = mysqli_fetch_assoc($results)) {
        $auth_username = $row['role']; // Use 'name' column to set the authenticated Gmail
        $auth_id = $row['id'];
        $user_role = $row['role']; // Get the role of the user from the database
        $_SESSION['jina'] = $auth_username;
        $_SESSION['id'] = $auth_id;
        $_SESSION['role'] = $user_role; // Store the role in the session
    }
    

    // Redirect based on user role
    if ($_SESSION['role'] === 'student') {
        header('location:menu.html'); // Change '.php' to the actual page for students
        exit();
    } elseif ($_SESSION['role'] === 'teacher') {
        header('location: teacher.html'); // Change 'upload.php' to the actual page for teachers
        exit();
    } else {
        // Handle other user roles or unexpected cases
        // You can customize this part as per your requirements
        echo "Unknown user role";
        exit();
    }
} else {
    $error_message = "Wrong student Reg no and password combination";
}
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico.png">
    <link rel="stylesheet" href="mwajei.css">
    <title>SANs</title><center>
    <img src="i.jpg" alt="" width=20%></center>
    <style>
        
a {
    position:absolute;
    right:100px;
    margin-top:10px; 
    
}
a{
    position:absolute;
    left:100px;
}
li {
    list-style: none;
}
.container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            background-color: blue;
            color: white;
            padding: 20px;
        }
        .form-container {
            width: 50%;
            padding: 20px;
            background-color: blue; /* Set the form container background to blue */
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            color: white; /* Set the text color to white */
        }

    
    </style>
</head>
<a href="account.php" style="color:blue "><b>CREATE ACCOUNT</b></a>
<body style="background-color:pink;">

    

    <form container="fo" style="text-align: center; padding-top: 50px ;" action="" method="post" onsubmit="return validateForm();">
       
        <h1 style="color:blue"><i><b>Login</b></i></h1><br>
        <input class="wid" style="width: 500px; text-align: center;" type="text" name="username" id="username" placeholder="USERNAME" required><br><br>
        <input class="wid" style="width: 500px; text-align: center;" type="password" name="password" id="password" placeholder="PASSWORD" required><br><br>
        <button name="login" class="btnRegister" style="background: #0099cc; font-size: 18px; border-radius: 10px; color: white;">Login</button><br>
        
        <a href="forget password.php" style="color:blue">Forgot password?</a>
    </form>

    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username.trim() === '' || password.trim() === '') {
                alert("Please enter both stutNamedentRegNo and password.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
<font face="IF YOU ARE NOT REGISTERED IN SYSTEM SIGN UP FIRST" size="9"><br>
    <marquee style="color:blue;" direction="left">IF YOU ARE NOT REGISTERED IN SYSTEM SIGN UP FIRST</marquee></font>

   
