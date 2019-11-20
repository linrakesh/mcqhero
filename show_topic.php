<?php 
    include_once('include/connect.php');
    $conn = database_connection();
    $grade = $_POST['grade'];
    $subject = $_POST['subject'];

    /*
    $sql = "select gs.sid, s.name from gradesubject gs,subject s where gs.sid = s.id and gid = ". $value .";";
    $result = mysqli_query($conn,$sql); 
    while($row = mysqli_fetch_array($result)){
        echo '<option value="' . $row[0] .'">'. $row[1]."</option>";
    } */

    echo $grade  . '  ' . $subject ;    
    
?>