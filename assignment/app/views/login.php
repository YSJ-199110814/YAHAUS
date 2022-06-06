<?php include("../../header.php"); ?>


<form action="" method="post">
    <p>You need an administrator account to access the database. Please log in to an administrator account below:</p>
    <fieldset class="loginbox">
        <legend>Admin Login</legend>
        <label for="username">Username:</label>
        <!-- add REQUIRED later -->
        <input type="text" id="username" name ="username" class="logindetails" required <?php
               if (isset($_REQUEST['username'])){echo "value=".$_REQUEST['username'];} ?> ><br/><br/>
        <label for="password">Password:</label>
        <!-- add REQUIRED later -->
        <input type="password" id="password" name="password" class="logindetails" required> <br/><br/>
        <input type="submit" name= "loginattempt" value="Submit">
    </fieldset>
</form>


<?php
if (isset($_REQUEST['loginattempt'])){
    include '../../dbh.php';
    include '../models/login.php';
    include '../controllers/logincontr.php';
    $logincontr = new LoginContr($_REQUEST['username'],$_REQUEST['password']);
    $logincontr->loginUser();
}
?>

<?php include("../../footer.php"); ?>