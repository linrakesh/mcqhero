<?php 
	session_start();
	if(!isset($_SESSION['uname']) || !isset($_SESSION['upass']) ){
		echo "<script>location.href='login.php'</script>";
	}
?>
<?php 
include_once('../include/connect.php');
include_once('header.php');?>
<div class="content">
    <h1>Add New Question</h1>
    <hr><br/>
    <div class="container" style="padding: 10px;">
        select Question Grade/Subject/ Topic :
            <select name="grade" id="grade">
                <option value="">Select Subject</option>    
                <?php show_subject('grade'); ?>
            </select>
            <select name="subject" id="subject">
                <option value="">Select Subject</option>    
            </select>
            <select name="topic" id="topic">
                <option value="">Select Subject</option>    
            </select>
    </div>
    <div class="container" style="border:none;">
        <div class="form">

            <label for="question">Question </label>
                <textarea name="question" id="question" cols="100%" rows="5"></textarea><br/>
            <label for="option1">A</label>
                <textarea name="option1" id="option1" cols="100%" rows="1"></textarea><br />
            <label for="option1">B</label>
                <textarea name="option2" id="option2" cols="100%" rows="1"></textarea><br />
            <label for="option1">C</label>
                <textarea name="option3" id="option3" cols="100%" rows="1"></textarea><br />
            <label for="option1">D</label>
                <textarea name="option4" id="option4" cols="100%" rows="1"></textarea><br /><br />
            <label for="answer">Answer</label>
                <input type="text" name="answer" id="answer"><br/><br />
            <label for="exp">Explanation :</label>
                <textarea name="exp" id="exp" cols="100%" rows="2"></textarea><br />
            <button type="submit" id="SaveQuestion">Save Question</button>    
    </div>     
    </div>
    
    
</div>
<?php include_once('footer.php');?>