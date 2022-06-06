


<?php

$conn = mysqli_connect("localhost", "root", "", "yahaus");
/* Update all values from the form in the database. */
$sql = "UPDATE tblstudents SET "
    . "Forename = '" . $_REQUEST['Forename'] . "', "
    . "MiddleNames = '" . $_REQUEST['MiddleNames'] . "', "
    . "Surname = '" . $_REQUEST['Surname'] . "', "
    . "Title = '" . $_REQUEST['Title'] . "', "
    . "Gender = '" . $_REQUEST['Gender'] . "', "
    . "DoB = '" . $_REQUEST['DoB'] . "', "
    . "CourseCode = '" . $_REQUEST['CourseCode'] . "', "
    . "Category = '" . $_REQUEST['Category'] . "', "
    . "Email = '" . $_REQUEST['Email'] . "', "
    . "Phone = '" . $_REQUEST['Phone'] . "', "
    . "NonTermAddress = '" . $_REQUEST['NonTermAddress'] . "', "
    . "AdviserID = '" . $_REQUEST['AdviserID'] . "', "
    . "NextOfKinRelationship = '" . $_REQUEST['NextOfKinRelationship'] . "', "
    . "NextOfKinForename = '" . $_REQUEST['NextOfKinForename'] . "', "
    . "NextOfKinSurname = '" . $_REQUEST['NextOfKinSurname'] . "', "
    . "NextOfKinAddress = '" . $_REQUEST['NextOfKinAddress'] . "', "
    . "NextOfKinEmail = '" . $_REQUEST['NextOfKinEmail'] . "', "
    . "NextOfKinTelephone = '" . $_REQUEST['NextOfKinTelephone'] ."' "
    . "WHERE StudentID = '" . $_REQUEST['StudentID'] ."';" ;

/* Redirect if SQL query successful. */
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record successfully updated.');</script>";
    header('Location: edithome.php?update=success');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>