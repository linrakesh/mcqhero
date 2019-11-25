<?php 
	session_start();
	if(!isset($_SESSION['uname']) || !isset($_SESSION['upass']) ){
		echo "<script>location.href='login.php'</script>";
	}
?>
<?php 
$grade        =  $_POST['grade'];  /* this will hold grade id */
$subject      = $_POST['subject']; /* This will hold subject code */
include_once('../include/connect.php');

$query = "select g.name,s.name from gradesubject gs , grade g, subject s  where gs.gid = g.id AND gs.sid = s.id and gs.gid=". $grade ." and gs.sid=" . $subject. ";" ;
$sql = "insert into gradesubject(gid,sid) values(". $grade .",". $subject .");";
/* echo $sql;  */
$conn = database_connection();
$result = mysqli_query($conn,$query);
$total = mysqli_num_rows($result);
if($total<=0) {
    $result = mysqli_query($conn,$sql);
    if($result)
        echo "Grade and Subject Added Successfully";
    else 
        echo "Error Please check";   
}else{
    echo "Record already exist...";
}
?>