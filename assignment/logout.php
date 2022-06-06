<?php
/*
Destroys the session and returns user to the login page.
*/
session_start();
session_destroy();
header("Location:login.php")
?>