<?php

session_start();

// delete all session in this server
session_destroy();

// delete one session with session name
// unset($_SESSION["userName"]);

header("Location: login.php");
?>