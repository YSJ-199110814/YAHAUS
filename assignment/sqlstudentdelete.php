<?php

$conn = mysqli_connect("localhost", "root", "", "yahaus");
$sql = "DELETE FROM tblstudents WHERE "
    . "StudentID = '" . $_REQUEST['StudentID'] ."';" ;


/* Redirect if SQL query successful. */
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record successfully updated.');</script>";
    header('Location: edithome.php?update=success');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>