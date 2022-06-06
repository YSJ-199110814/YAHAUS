
<?php

$conn = mysqli_connect("localhost", "root", "", "yahaus");
/* Insert given values into the student table as a new entry. */
$sql = "INSERT INTO tblstudents VALUES ( "
    . "'" . $_REQUEST['StudentID'] . "', "
    . "'" . $_REQUEST['Forename'] . "', "
    . "'" . $_REQUEST['MiddleNames'] . "', "
    . "'" . $_REQUEST['Surname'] . "', "
    . "'" . $_REQUEST['Title'] . "', "
    . "'" . $_REQUEST['Gender'] . "', "
    . "'" . $_REQUEST['DoB'] . "', "
    . "'" . $_REQUEST['CourseCode'] . "', "
    . "'" . $_REQUEST['Category'] . "', "
    . "'" . $_REQUEST['Email'] . "', "
    . "'" . $_REQUEST['Phone'] . "', "
    . "'" . $_REQUEST['NonTermAddress'] . "', "
    . "'" . $_REQUEST['AdviserID'] . "', "
    . "'" . $_REQUEST['NextOfKinRelationship'] . "', "
    . "'" . $_REQUEST['NextOfKinForename'] . "', "
    . "'" . $_REQUEST['NextOfKinSurname'] . "', "
    . "'" . $_REQUEST['NextOfKinAddress'] . "', "
    . "'" . $_REQUEST['NextOfKinEmail'] . "', "
    . "'" . $_REQUEST['NextOfKinTelephone'] ."' "
    . ");" ;

/* Redirect if SQL query successful. */
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record successfully updated.');</script>";
    header('Location: edithome.php?update=success');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>