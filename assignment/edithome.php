<?php include("header.php"); ?>

<?php

if (isset($_GET['update'])){
    echo "<h3 style='color:darkred;'>Database successfully updated.</h3>";
}

$conn = mysqli_connect("localhost", "root", "", "yahaus");
$sql = "SELECT Forename, Surname, StudentID FROM tblstudents";
$rs = mysqli_query($conn, $sql);
?>



<nav class="sub">
     <ul>
        <li><a href="#">Students</a></li>
        <li><a href="prototype.php">Staff</a></li>
        <li><a href="prototype.php">Placements</a></li>
        <li><a href="prototype.php">Halls</a></li>
        <li><a href="prototype.php">Apartments</a></li>
        <li><a href="prototype.php">Leases</a></li>
        <li><a href="prototype.php">Invoices</a></li>
    </ul>
</nav>


<h3>Edit student records</h3>
<form action="edithome.php" method="post">
    <fieldset>
        <legend>Create</legend>
        <input type="submit" value="Create new student record" name="create">
    </fieldset>
</form>
<form action="edithome.php" method="post">
    <fieldset class="studentlookup">
        <legend>Edit / Delete</legend>
        <label for="lookup">Search a student:</label><br>
        <datalist id="lookup" name="lookup">
            <?php
            /* Datalist options provided are a concatination of the Student ID (6 digit format), Forename and Surname. */
            while ($row = mysqli_fetch_array($rs)){
                echo ('<option>'
                    . '(' . sprintf("%06d", $row['StudentID']) . ') ' . $row['Forename']. ' ' . $row['Surname'])
                    . '</option>';
                }
            ?>
        </datalist>
        <input list="lookup" id="lookup" name="lookup" class="lookup">
        <input type="submit" name="search" value="Search">
        
    </fieldset>
       <br/>
    
</form>

<br/>
<br/>


<?php
/* If the 'Create' submit button was pressed, include the studentcreate php in the flow of the webpage. */
if (isset($_REQUEST['create'])){
    include("studentcreate.php");
} 
/* If the 'Search' submit button was pressed, include the studentedit php in the flow of the webpage.
Checks that the search string is not empty, and is a sufficient length to slice the digits from the search string.*/
elseif (isset($_REQUEST['lookup'])){
    if ($_REQUEST['lookup'] != '' && strlen($_REQUEST['lookup']<11)){
        include("studentedit.php");
    }
}

/* Close connection */
mysqli_close($conn);
?>



<?php include("footer.php"); ?>