<?php
if(isset($_GET["register"])){
    include "db.php";
    $email = $_GET["email"];
    $username = $_GET["username"];
    $city = $_GET["city"];
    $password = $_GET["password"];
    $confirmPassword = $_GET["confirmPassword"];

    if($password !== $confirmPassword){
        echo "Password invalid";
    }else{
        // insert data code...
        $result = mysqli_query($conn, "INSERT INTO user(email, username, city, password) VALUES ('$email','$username','$city','$password')");
        echo '<script>alert("New Data Inserted")</script>';
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
      <form action="" method="GET">
        <div>
            <label>Email</label><br>
            <input type="email" name="email" id="email"/>
        </div>
        <div>
            <label>User name</label><br>
            <input type="text" name="username" id="username"/>
        </div>
        <div>
            <label>City</label><br>
            <input type="text" name="city" id="city"/>
        </div>
        <div>
            <label>Password</label><br>
            <input type="password" name="password" id="password"/>
        </div>
        <div>
            <label>Confirm Password</label><br>
            <input type="password" name="confirmPassword" id="confirmPassword"/>
        </div>
        <div>
        <input type="submit" name="register" id="reg" />
        </div>
        <br>
    </form>
    <a href="login.php">Click Here to Login</a>
</body>
</html>