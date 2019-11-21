<?php
    include_once('../include/connect.php');
    $conn = database_connection();
    $value = $_POST['grade'];

    $sql = "select gs.sid, s.name from gradesubject gs,subject s where gs.sid = s.id and gid = ". $value .";";
    echo '<option value=""> Select Subject </option>';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
        echo '<option value="' . $row[0] .'">'. $row[1]."</option>";
    }

?>