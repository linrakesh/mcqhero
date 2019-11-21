<?php
    include_once('include/connect.php');
    $conn = database_connection();
    $grade = $_POST['grade'];
    $subject = $_POST['subject'];
   /*  echo $grade . $subject ; */
    $sql = "select t.id,t.tname from GST left join grade g ON gst.gid = g.id Left Join  subject s ON gst.sid = s.id Left Join topic t on gst.tid = t.id where gst.gid =". $grade . " and gst.sid =". $subject;

    //echo $sql;
    $result = mysqli_query($conn,$sql);
    echo '<option value=""> Select Topic </option>';
    while($row = mysqli_fetch_array($result)){
        echo '<option value="' . $row[0] .'">'. $row[1]."</option>";
    }

?>