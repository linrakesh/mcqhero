<?php 
	session_start();
	if(!isset($_SESSION['uname']) || !isset($_SESSION['upass']) ){
		echo "<script>location.href='login.php'</script>";
	}
?>
<?php 
$grade        =  $_POST['grade'];  /* this will hold grade id */
$subject      =  $_POST['subject']; /* This will hold subject code */
$topic        =  $_POST['topic'];  /* This will hold topic code */
include_once('../include/connect.php');

$query = "select * from gst gs where gs.gid =". $grade ." and gs.sid=" . $subject. " and gs.tid = ". $topic .";" ;
$sql = "insert into gst(gid,sid,tid) values(". $grade .",". $subject ."," .$topic .");";
/* echo $sql;  */
$conn = database_connection();
$result = mysqli_query($conn,$query);
$total = mysqli_num_rows($result);
if($total<=0) {
    $result = mysqli_query($conn,$sql);
    if($result)
        echo "Topic assigned Successfully";
    else 
        echo "Error Please check";   
}else{
    echo "Record already exist...";
}
?>