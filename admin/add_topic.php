<?php 
	include_once('../include/connect.php');
	include_once('header.php');
?>
<div class="content">
    <h2>Add Topics</h2>
    <hr>
    <input type ="text" name="topic" id="topic"  placeholder="Enter Topic / Chapter Name here" required >
    <button name="addtopic" id ="addTopic">Add this Topic</button>
    <div class="Topic">
        <?php show_subject('topic'); ?>    
    </div>
</div>
<?php include_once('footer.php'); ?>