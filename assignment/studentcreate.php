
<?php


$conn = mysqli_connect("localhost", "root", "", "yahaus");
/* Order StudentID in descending order so first array result will be highest value. */
$sql = "SELECT * FROM tblstudents ORDER BY StudentID DESC;";
$rs = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($rs);

/* Take highest StudentID value and add 1 as the new StudentID. */
$studentid = $row['StudentID'];+1




?>


<div class="report">
    <form action="sqlstudentcreate.php" method="post">
        <fieldset class="student">
            <legend>Create new student record</legend>
            <p>
                Student ID number: <strong><?php echo sprintf("%06d", $studentid) ?></strong>
            </p>
            <fieldset>
                <table class="update-display">
                    
                    <legend><strong>Student Information</strong></legend>
                    <input type="hidden" id="StudentID" name="StudentID" value="<?php echo $studentid ?>">
                    <tr>
                        <td><label for="Forename">Forename<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="100" id="Forename" name="Forename" required></td>
                    </tr>
                    <tr>
                        <td><label for="MiddleNames">Middle name(s): </label></td>
                        <td><input type="text" maxlength="100" id="MiddleNames" name="MiddleNames"></td>
                    </tr>
                    <tr>
                        <td><label for="Surname">Surname<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="100" id="Surname" name="Surname" required></td>
                    </tr>
                    <tr>
                        <td><label for="Title">Title<span class="ast">*</span>: </label></td>
                        <td><select id="Title" name="Title">
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Ms.">Ms.</option>
                            <option value="Miss.">Miss</option>
                            <option value="N/A">N/A</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="Gender">Gender<span class="ast">*</span>: </label></td>
                        <td><select id="Gender" name="Gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Non-binary">Non-binary</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="DoB">Date of Birth<span class="ast">*</span>: </label></td>
                        <td><input type="date" id="DoB" name="DoB" value ="2000-01-01"></td>
                    </tr>
                    <tr>
                        <td><label for="CourseCode">Course Code: </label></td>
                        <td><input type="number" id="CourseCode" name="CourseCode"></td>
                    </tr>
                    <tr>
                        <td><label for="Category">Student type<span class="ast">*</span>: </label></td>
                        <td><select id="Category" name="Category">
                            <option value="New student">New Student</option>
                            <option value="Year 1">Year 1</option>
                            <option value="Year 2">Year 2</option>
                            <option value="Year 3">Year 3</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="Email">Email<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="320" id="Email" name="Email" required></td>
                    </tr>
                    <tr>
                        <td><label for="Phone">Phone<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="50" id="Phone" name="Phone" required></td>
                    </tr>
                    <tr>
                        <td><label for="NonTermAddress">Non-termtime Address<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="150" id="NonTermAddress" name="NonTermAddress" required></td>
                    </tr>
                    <tr>
                        <td><label for="AdviserID">AdviserID: </label></td>
                        <td><input type="number" id="AdviserID" name="AdviserID"></td>
                    </tr>
                </table>
            </fieldset>
            <br>
            <fieldset>
                <table class="update-display">
                    <legend><strong>Next of Kin information:</strong></legend>
                    <tr>
                        <td><label for="NextOfKinRelationship">Next Of Kin Relationship<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="30" id="NextOfKinRelationship" name="NextOfKinRelationship" required></td>
                    </tr>
                    <tr>
                        <td><label for="NextOfKinForename">Next Of Kin Forename<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="100" id="NextOfKinForename" name="NextOfKinForename" required></td>
                    </tr>
                    <tr>
                        <td><label for="NextOfKinSurname">Next Of Kin Surname<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="100" id="NextOfKinSurname" name="NextOfKinSurname" required></td>
                    </tr>
                    <tr>
                        <td><label for="NextOfKinAddress">Next Of Kin Address: </label></td>
                        <td><input type="text" maxlength="150" id="NextOfKinAddress" name="NextOfKinAddress"></td>
                    </tr>
                    <tr>
                        <td><label for="NextOfKinEmail">Next of Kin Email: </label></td>
                        <td><input type="text" maxlength="320" id="NextOfKinEmail" name="NextOfKinEmail"></td>
                    </tr>
                    <tr>
                        <td><label for="NextOfKinTelephone">Next Of Kin Telephone<span class="ast">*</span>: </label></td>
                        <td><input type="text" maxlength="50" id="NextOfKinTelephone" name="NextOfKinTelephone" required></td>
                    </tr>
                </table>
            </fieldset>
            <br>
            <input class="update" type="submit" value="Create">
        </fieldset>
        
    </form>


    
</div>