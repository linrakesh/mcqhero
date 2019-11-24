<?php 
	include_once('../include/connect.php');
	include_once('header.php');
?>
<div class="content">
    <h2>Add Subjects</h2>
    <hr>
    <input type ="text" name="subject" id="subject"  placeholder="Enter Subject Name here" required >
    <button name="addsubject" id ="addsubject">Add Grade</button>
    <div class="subjects">
        <?php show_subject('subject'); ?>    
    </div>
</div>
<?php include_once('footer.php'); ?>