<?php
session_start();

if(isset($_SESSION["userName"])){
header("Location:dashboard.php");
}
if(isset($_POST["login"])){
    include "db.php";
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND password='$password'");
    $data = mysqli_fetch_assoc($query);
    if($data){
        // session
        // print_r($data);
        $_SESSION["userName"] = $data["username"];
        header("Location:dashboard.php");
    }else{
        echo '<script>alert("Please Register and login");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <div>
            <div>
                <label>Email</label><br>
                <input type="email" name="email" id="email" />
            </div><br>
            <div>
                <label>Password</label><br>
                <input type="password" name="password" id="password" />
            </div>
            <div><br>
                <input type="submit" name="login" id="login" value="Login" />
            </div>
        </div>
    </form>
</body>
</html>