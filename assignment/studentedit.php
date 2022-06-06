
<?php

$studentid = intval(substr($_REQUEST['lookup'], 1,6));

$conn = mysqli_connect("localhost", "root", "", "yahaus");
$sql = "SELECT * FROM tblstudents WHERE StudentID = ".$studentid;
$rs = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($rs);

/* The following HTML is interspersed with PHP that assigns the input values as the existing values in the database. */
?>


<div class="report">
    <form action="sqlstudentupdate.php" method="post">
        <fieldset class="student">
            <legend>Edit student records</legend>
            <p>
                Student ID number: <strong><?php echo sprintf("%06d", $studentid) ?></strong>
            </p>
            <fieldset>
                <table class="update-display">
                    
                    <legend><strong>Student Information</strong></legend>
                    <input type="hidden" id="StudentID" name="StudentID" value="<?php echo $studentid?>">
                    <tr>
                        <td><label for="Forename">Forename<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="100" id="Forename" name="Forename" value ="<?php echo $row['Forename'] ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="MiddleNames">Middle name(s): </label></td>
                        <td><input type="text" maxlength="100" id="MiddleNames" name="MiddleNames" value ="<?php echo $row['MiddleNames'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="Surname">Surname<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="100" id="Surname" name="Surname" value ="<?php echo $row['Surname'] ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="Title">Title<span class="ast">*</span>: </label></td>
                        <td><select id="Title" name="Title">
                            <option value="Mr." <?php if ($row['Title'] == "Mr."){echo " selected";} ?>>Mr.</option>
                            <option value="Mrs." <?php if ($row['Title'] == "Mrs."){echo " selected";} ?>>Mrs.</option>
                            <option value="Ms." <?php if ($row['Title'] == "Ms."){echo " selected";} ?>>Ms.</option>
                            <option value="Miss." <?php if ($row['Title'] == "Miss"){echo " selected";} ?>>Miss</option>
                            <option value="N/A" <?php if ($row['Title'] == "N/A"){echo " selected";} ?>>N/A</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="Gender">Gender<span class="ast">*</span>: </label></td>
                        <td><select id="Gender" name="Gender">
                            <option value="Male" <?php if ($row['Gender'] == "Male"){echo " selected";} ?>>Male</option>
                            <option value="Female" <?php if ($row['Gender'] == "Female"){echo " selected";} ?>>Female</option>
                            <option value="Non-binary" <?php if ($row['Gender'] == "Non-binary"){echo " selected";} ?>>Non-binary</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="DoB">Date of Birth<span class="ast">*</span>: </label></td>
                        <td><input type="date" id="DoB" name="DoB" value ="<?php echo $row['DoB'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="CourseCode">Course Code: </label></td>
                        <td><input type="number" id="CourseCode" name="CourseCode" value ="<?php echo $row['CourseCode'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="Category">Student type<span class="ast">*</span>: </label></td>
                        <td><select id="Category" name="Category">
                            <option value="New student" <?php if ($row['Category'] == "New student"){echo " selected";} ?>>New Student</option>
                            <option value="Year 1" <?php if ($row['Category'] == "Year 1"){echo " selected";} ?>>Year 1</option>
                            <option value="Year 2" <?php if ($row['Category'] == "Year 2"){echo " selected";} ?>>Year 2</option>
                            <option value="Year 3" <?php if ($row['Category'] == "Year 3"){echo " selected";} ?>>Year 3</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="Email">Email<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="320" id="Email" name="Email" value ="<?php echo $row['Email'] ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="Phone">Phone<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="50" id="Phone" name="Phone" value ="<?php echo $row['Phone'] ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="NonTermAddress">Non-termtime Address<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="150" id="NonTermAddress" name="NonTermAddress" value ="<?php echo $row['NonTermAddress'] ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="AdviserID">AdviserID: </label></td>
                        <td><input type="number" id="AdviserID" name="AdviserID" value ="<?php echo $row['AdviserID'] ?>"></td>
                    </tr>
                </table>
            </fieldset>
            <br>
            <fieldset>
                <table class="update-display">
                    <legend><strong>Next of Kin information:</strong></legend>
                    <tr>
                        <td><label for="NextOfKinRelationship">Next Of Kin Relationship<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="30" id="NextOfKinRelationship" name="NextOfKinRelationship" value ="<?php echo $row['NextOfKinRelationship'] ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="NextOfKinForename">Next Of Kin Forename<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="100" id="NextOfKinForename" name="NextOfKinForename" value ="<?php echo $row['NextOfKinForename'] ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="NextOfKinSurname">Next Of Kin Surname<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="100" id="NextOfKinSurname" name="NextOfKinSurname" value ="<?php echo $row['NextOfKinSurname'] ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="NextOfKinAddress">Next Of Kin Address: </label></td>
                        <td><input type="text" maxlength="150" id="NextOfKinAddress" name="NextOfKinAddress" value ="<?php echo $row['NextOfKinAddress'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="NextOfKinEmail">Next of Kin Email: </label></td>
                        <td><input type="text" maxlength="320" id="NextOfKinEmail" name="NextOfKinEmail" value ="<?php echo $row['NextOfKinEmail'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="NextOfKinTelephone">Next Of Kin Telephone<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="50" id="NextOfKinTelephone" name="NextOfKinTelephone" value ="<?php echo $row['NextOfKinTelephone'] ?>" required></td>
                    </tr>
                </table>
            </fieldset>
            <br>
            <input class="update" type="submit" value="Update">
        </fieldset>
        
    </form>
    <form action="sqlstudentdelete.php" method="post" onsubmit="return confirm('Are you sure you want to delete this record?')">
        <fieldset style="width:200px;margin:auto;color:red;text-align:center;">
            <input type="hidden" name="StudentID" value = "<?php echo $studentid ?>">
            DELETE RECORD: Warning - this record will not able to be recovered.<input type="submit" value="Delete" onClick="return confirm("Are you sure?")">
        </fieldset>
    </form>
    
</div>