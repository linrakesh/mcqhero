<?php 

function database_connection(){
    $conn = mysqli_connect("localhost","root","","binarynote");
   /*  if(mysqli_connect_error())
        echo "Connection error";
    else    
        echo "connected successfully"; */
    return $conn; 
}

function show_grades($grade=null){
    $con = database_connection();
    $sql = "select id,name from grade where name like '%". $grade ."%';";
    /* echo $sql; */
    $result = mysqli_query($con,$sql);
    /* print_r($result); */
    while($row = mysqli_fetch_assoc($result)){
        echo $row['id'] ." "  . $row['name']."<br/>";
    }
    mysqli_free_result($result);
    mysqli_close($con);
}

function show_subject(){
    $con = database_connection();
    $sql = "select id,name from subject;";
    $result = mysqli_query($con,$sql);
    /* print_r($result); */
    while($row = mysqli_fetch_assoc($result)){
        echo $row['id'] ." "  . $row['name']."<br/>";
    }
    mysqli_free_result($result);
    mysqli_close($con);
}

function count_record(){
    $con = database_connection();
    $sql = "select count(*) from question;";
    $result = mysqli_query($con, $sql);
    $count = mysqli_fetch_array($result);
    echo $count[0];

}

function show_questions( $offset=0 ){
    $con = database_connection();
    $sql = "select  * from question" . " limit 4 offset ". $offset .";";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo 'Q'. $row['qid'].'.   '.$row['question']."<br/> A.".$row['option1'].'<br/> B.';
        echo $row['option2'].'<br/>C.'.$row['option3'].'<br/>D.';
        echo $row['option4'].'<br/> Ans.'. $row['ans']."<br/> Explaination : <br/>";
        echo $row['exp']."<br/><br/><br/>";
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

