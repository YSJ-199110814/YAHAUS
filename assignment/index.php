<?php include("header.php"); ?>


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


<table class="tabular">
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Adviser</th>
        <th>Course name</th>
    </tr>

    
        
    <?php
    $conn = mysqli_connect("localhost", "root", "", "yahaus");
    
    /* Join the Student table via its foreign keys with Staff and Courses */
    $sql = "SELECT tblstudents.*, tblstaff.Forename AS StaffForename, tblstaff.Surname AS StaffSurname, tblcourses.CourseName"
    . " FROM tblstudents "
    . " INNER JOIN tblstaff "
    . " ON tblstudents.AdviserID=tblstaff.StaffID"
    . " INNER JOIN tblcourses "
    . " ON tblstudents.CourseCode=tblcourses.CourseCode"
    . " ORDER BY tblstudents.StudentID ASC;";
    $rs = mysqli_query($conn, $sql);
    
    /* Print a table row for each database entry.*/
    while($row = mysqli_fetch_array($rs)){
        echo "<tr>";
        echo "<td>" . sprintf("%06d", $row['StudentID']) . "</td>";
        echo "<td>" . $row['Forename'] . " " . $row['Surname'] . "</td>";
        echo "<td>" . $row['StaffForename'] . " " . $row['StaffSurname'] . "</td>";
        echo "<td>" . $row['CourseName'] . "</td>";
        echo "</tr>";
    }

    mysqli_close($conn);

    ?>
    

</table>

<?php include("footer.php"); ?>