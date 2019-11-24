<?php 
include_once('../../include/connect.php');
include_once('../header.php');
?>
 <div class="container">
    <input type="text" name="grade" id="grade">
    <button name="addgrade" id="addgrade">Add Grade</button>
    <h2> Available Grade</h2>
    <?php show_subject('grade');?> 
 </div>
 <?php include_once('../footer.php');?>
