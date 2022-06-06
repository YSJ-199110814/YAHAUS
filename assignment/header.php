<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>YAHUAS</title>
        <meta name="author" content="Student number: 199110814">
    </head>

    <body>
        <header>
            <?php
            if (isset($_SESSION['user'])){
            echo '<nav class="accountnav">
                <ul>
                    <li><span>Logged in as ' . $_SESSION["user"]["username"] . '</span></li>
                    <li><a href="logout.php">Log out</a></li>
                    <li><a href="create_account.php">Add new admin account</a></li>
                </ul>
            </nav>';
            };
            ?>
            <h1>YAHUAS database management tool</h1>

            
            <nav class="top">
                <ul>
                    <li><a href =".">Run report</a></li>
                    <li><a href ="edithome.php">Edit data</a></li>
                    <li><a href ="prototype.php">Import data</a></li>
                    <li><a href ="scheduler.php">Database settings</a></li>
                </ul>
            </nav>
        </header>

        <main>

<?php
if (!isset($_SESSION['user']) and basename($_SERVER['PHP_SELF']) !== "login.php"){
    header("Location: login.php");
    exit();
}
?>