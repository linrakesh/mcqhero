<?php

function database_connection(){
    $conn = mysqli_connect("localhost","root","","binarynote");
   /*  if(mysqli_connect_error())
        echo "Connection error";
    else
        echo "connected successfully"; */
    return $conn;
}

function show_name($table=null,$id=null){
    $con = database_connection();
    $sql = "select * from {$table} where id =". $id .";";
    /* echo $sql; */
    $result = mysqli_query($con,$sql);
    /* print_r($result); */
    while($row = mysqli_fetch_array($result)){
         echo $row[1];
    }
    mysqli_free_result($result);
    mysqli_close($con);

}

function show_subject($table=null){
    $con = database_connection();
    $sql = "select * from {$table};";
    $result = mysqli_query($con,$sql);
    /* print_r($result); */
    while($row = mysqli_fetch_array($result)){
        echo '<option value="' . $row[0] .'">'. $row[1]."</option>";
    }
    mysqli_free_result($result);
    mysqli_close($con);
}

function count_record($grade=null,$subject=null,$topic=null){
    $con = database_connection();
     $sql = "select  count(*) from question where gid=" . $grade . " and sid=".$subject ." and tid =". $topic .";";
    $result = mysqli_query($con, $sql);
    $count = mysqli_fetch_array($result);
    mysqli_free_result($result);
    mysqli_close($con);
    return $count[0];
}

function show_questions( $grade=null,$subject=null,$topic=null ){
    $con = database_connection();
    $sql = "select  * from question where gid=" . $grade . " and sid=".$subject ." and tid =". $topic .";";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo 'Q'. $row['qid'].'.   '.$row['question']."<br/> A.".$row['option1'].'<br/> B.';
        echo $row['option2'].'<br/>C.'.$row['option3'].'<br/>D.';
        echo $row['option4'].'<br/> Ans.'. $row['ans']."<br/> Explaination : <br/>";
        echo $row['exp']."<br/>";
    }
    mysqli_free_result($result);
    mysqli_close($con);
}



/* echo "Available Grades <br/>";
show_grades('12');
echo "Available Subjects <br/>";
show_subject();
 */

/* show_questions();

 */
