<?php 
	include_once('../include/connect.php');
	include_once('header.php');
?>
<div class="content">
    <h2>Subject Assignment for each Grade</h2>
    <hr>
    <div class="container">
        <div class="grade" style="width:49%;background:#fff;padding:10px;">
            Select Single Grade 
            <select name="grade" id="grade1" size=10>
                <?php show_subject('grade'); ?>
            </select>
        </div>
        <div class="subject" style="width:50%;background:#fff;padding:10px;margin-left:10%;">
            Select Subject(s)
            <select name="subject" id="subject1" size=10>
                <?php show_subject('subject'); ?>
            </select>
        </div>
    </div>    
        <button name="GradeSubjectAssign" id="GradeSubjectAssign">Attach Each Subject with Grade</button>
    <div class="container-new" style="background:#fff;padding:10px;">
        <h2>Available Assigned Subjects </h2>
        <hr>
        <?php 
        $conn = database_connection();
        $sql ="select g.name,s.name from gradesubject gs , grade g, subject s  where gs.gid = g.id AND gs.sid = s.id order by g.name";
        $result = mysqli_query($conn,$sql);
        echo '<select id="gradesubject" size=20>';
        while($row = mysqli_fetch_array($result)){
            echo '<option> '. $row[0] . '     ------------------->     ' .$row[1] ."</option>";
        }
        echo '</select>';
        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </div>    
</div>
<?php include_once('footer.php'); ?>