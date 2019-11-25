<?php 
	include_once('../include/connect.php');
	include_once('header.php');
?>
<div class="content">
    <h2>Topic Assignment for each Grade-Subject</h2>
    <hr>
    <div class="container">
        <div class="grade">
            Select Single Grade 
            <select name="grade" id="grade1" size=10>
                <?php show_subject('grade'); ?>
            </select>
        </div>
        <div class="subject">
            Select Subject(s)
            <select name="subject" id="subject1" size=10>
                <?php show_subject('subject'); ?>
            </select>
        </div>
        <div class="topic">
            Select Topics(s)
            <select name="topic" id="topic1" size=10>
                <?php show_subject('topic'); ?>
            </select>
        </div>
    </div>    
        <button name="GradeSubjectTopicAssign" id="GradeSubjectTopicAssign">Attach Topic with Grade and Subject</button>
    <div class="container-new" style="background:#fff;padding:10px;">
        <h2>Available Assigned Topics </h2>
        <hr>
        <?php 
        $conn = database_connection();
        $sql ="select g.name,s.name,t.tname from GST left join grade g ON gst.gid = g.id Left Join  subject s ON gst.sid = s.id Left Join topic t on gst.tid = t.id order by g.name";
        $result = mysqli_query($conn,$sql);
        echo '<select id="gradesubject" size=30>';
        while($row = mysqli_fetch_array($result)){
            echo '<option> '. $row[0] . ' ------------>     ' .$row[1] ."---------------->". $row[2] . "</option>";
        }
        echo '</select>';
        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </div>    
</div>
<?php include_once('footer.php'); ?>