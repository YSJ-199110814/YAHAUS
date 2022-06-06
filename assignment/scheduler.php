<?php include("header.php") ?>

<?php include("preferences.php") ?>

<script>

function toggleEndDate() {
    var indef = document.getElementById("indef");
    if (indef.checked == true){
        document.getElementById("enddate").disabled = true;
    } else {
        document.getElementById("enddate").disabled = false;
    }
}   
</script>

<form>
    <label for="enable_scheduler">Enable scheduler functionality?</label>
    <input type="checkbox" id="enable_scheduler" name="enable_scheduler" <?php echo $scheduler_vars['enable_scheduler'] ? "checked" : ""; ?> >
    <br/><br/>
    <fieldset>
        <legend>Academic year maturation</legend>
        <label for="enable_maturation">Enable automatic maturation?</label>
        <input type="checkbox" id="enable_maturation" name="enable_maturation" <?php echo $scheduler_vars['enable_maturation'] ? "checked" : ""; ?> >
        <br/>
        <div class="maturation">
            <label for="startdate">Academic year maturation date:</label>
            <input type="date" id="startdate" name="startdate" value="<?php echo $scheduler_vars['start'] ?>">
            <br/>
            <label for="indef">Indefinitely mature the academic year:</label>
            <input type="checkbox" id="indef" name="indef" onclick='toggleEndDate()' <?php echo $scheduler_vars['indef'] ? "checked" : ""; ?> >
            <br/>
            <label for="enddate">Stop academic year maturation from this date:</label>
            <input type="date" id="enddate" name="enddate" value="<?php echo $scheduler_vars['end'] ?>">
            <br/>
        </div>
    </fieldset>
    <fieldset>
        <legend>Graduate deletion scheduler</legend>
        <label for="delete">Enable scheduled graduate deletion?</label>
        <input type="checkbox" id="delete" name="delete" <?php echo $scheduler_vars['delete'] ? "checked" : ""; ?> >
    </fieldset>
</form>

<script>
toggleEndDate();
</script>

<?php include("footer.php") ?>