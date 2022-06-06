<?php include("header.php"); ?>

<?php    
$attempted = $_REQUEST['attempted'] ?? false;
if ($attempted){

    $username = strtolower($_REQUEST['username']) ?? false;
    $email_address = strtolower($_REQUEST['email_address']) ?? false;
    $newpass = $_REQUEST['newpass'] ?? false;
    $confirmpass = $_REQUEST['confirmpass'] ?? false;

    /* All fields should be populated due to the 'require' attribute in the HTML input tags.
    In the event of HTML manipulation or other browser failures, $populated acts as a failsafe. */
    $populated = ($username and $email_address and $newpass and $confirmpass) ? true : false;
    $password_match = ($confirmpass == $newpass);
    /* CHECK FOR: data quality */
    $username_quality = true;
    $email_quality = true;
    $password_quality = true;
    $data_quality = ($username_quality and $email_quality and $password_quality);

    if ($populated and $password_match and $data_quality){
        
        $conn = new mysqli("localhost", "root", "", "yahaus");
        
        /* Check if username already exists in database */
        $sql = "SELECT * FROM tblusers WHERE Username='$username' LIMIT 1";
        $rs = $conn->query($sql);
        $username_present = $rs->num_rows;
        
        /* Check if email address already exists in database */
        $sql = "SELECT * FROM tblusers WHERE EmailAddress='$email_address' LIMIT 1";
        $rs = $conn->query($sql);
        $email_present = $rs->num_rows;
                    
        if ($username_present){
            $err_message = "This username already exists. Please try another.<br/>";
        } elseif ($email_present){
            $err_message = "This email address is already registered to an account.";
        } else{
            /* Hash password for security */
            $password = password_hash($newpass, PASSWORD_DEFAULT);
            /* Create new row in users database */
            $err_message = "Success!";
            $sql = "INSERT INTO tblusers (Username, Password, EmailAddress)
            VALUES ('$username', '$password', '$email_address')";
            $conn->query($sql);
        }
        $conn->close();
            
    } elseif ($populated){
        $err_message = "Passwords do not match. Please try again.";
    } elseif (!$quality){
        $err_message = "Please meet the specified password quality.";
    } else{
        $err_message = "Please ensure fields have been completed.";
    }

}
?>

<form action="" method="post">
    <p>Please use the form below to create an account.</p>
    <fieldset class="loginbox">
        <legend>Create account</legend>
        <label for="username">Username:</label>
        <input type="text" id="username" name ="username" class="logindetails" required <?php
               if (isset($attempted, $username)){echo "value=".$username;} ?> ><br/><br/>
        <label for="email_address">Email address:</label>
        <input type="text" id="email_address" name ="email_address" class="logindetails" required <?php
               if (isset($attempted, $email_address)){echo "value=".$email_address;} ?> ><br/><br/>
        <label for="newpass">Password (8-50 characters):</label>
        <input type="password" id="newpass" name="newpass" class="logindetails" required ><br/><br/>
        <label for="confirmpass">Confirm Password:</label>
        <input type="password" id="confirmpass" name="confirmpass" class="logindetails" required ><br/><br/>
        <input type= "hidden" name="attempted" value="true" />
        <?php
        if (isset($err_message)){
            echo
            "<div class = 'error'>"
                .$err_message
            ."</div>";
        }
        ?>
        <input type="submit" value= "Create account">
    </fieldset>
</form>

<?php include("footer.php"); ?>