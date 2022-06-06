<?php
/*
include("dbh.php");
include("app/models/users.php");
include("app/views/usersview.php");
$pdo = new UsersView;
echo $pdo->showUser('dog');
*/


include("dbh.php");
include("app/models/users.php");
include("app/views/usersview.php");
include("app/models/login.php");
include("app/controllers/logincontr.php");

$logincontr = new LoginContr('admin', 'password');
$logincontr->loginUser();


?>