<?php 
    session_start();
    if(isset($_POST['name']) && isset($_POST['password'])){
        $_SESSION['uname'] = $_POST['name'];
        $_SESSION['upass'] = $_POST['password'];
       /*  echo "<script> alert('inside login session'); </script>"; */
        echo "<script> location.href='index.php'; </script>";
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel - MCQ Hero</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="login">
        <h1 style="text-align:center">Admin Panel</h1>
        <form action="" method="post">
            <label for="name">Name</label>
                <input type="text" name ="name" id="Name" placeholder="Enter your LoginID">
            <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password">
            <button type="submit" name="submit" id="loginsubmit">Login</button>
        </form>
    </div>
</body>
</html>