<?php 
	include_once('../include/connect.php');
	include_once('header.php');
?>
<div class="content">
    <h2>Add Grades</h2>
    <hr>
    <input type ="text" name="grade" id="grade"  placeholder="Enter Grade Name here" required >
    <button name="addgrade" id ="addgrade">Add Grade</button>
    <div class="grades">
        <?php show_subject('grade'); ?>    
    </div>
</div>
<?php include_once('footer.php'); ?>