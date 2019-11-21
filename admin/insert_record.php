<?php 
$gid        = $_POST['grade'];
$sid        = $_POST['subject'];
$tid        = $_POST['topic'];
$question   = $_POST['question'];
$a          = $_POST['option1'];
$b          = $_POST['option2'];
$c          = $_POST['option3'];
$d          = $_POST['option4'];
$ans        = $_POST['answer'];
$exp        = $_POST['exp'];
//echo $gid .'  '.$sid.'  '. $tid .' '. $question . ' '. $a .' '. $b . ' '. $c .' '. $d . ' '. $ans . ' '. $exp;   
include_once('../include/connect.php');
$sql = "insert into question(question,option1,option2,option3,option4,ans,exp,gid,sid,tid) values('". $question . "','". $a ."','". $b ."','". $c ."','". $d ."','".$ans ."','". $exp ."'," . $gid.",".$sid.",".$tid.");";
/* echo $sql; */
$conn = database_connection();
$result = mysqli_query($conn,$sql);
if($result)
    echo "Record added successfully";
else 
    echo "Error Please check";   

?>