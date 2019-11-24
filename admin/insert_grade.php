<?php 
	session_start();
	if(!isset($_SESSION['uname']) || !isset($_SESSION['upass']) ){
		echo "<script>location.href='login.php'</script>";
	}
?>
<?php 
$grade      = $_POST['grade'];
include_once('../include/connect.php');
$query = "select * from grade where name ='".$grade."';";
$sql = "insert into grade(name) values('". $grade . "');";
/* echo $sql; */
$conn = database_connection();
$result = mysqli_query($conn,$query);
$total = mysqli_num_rows($result);
if($total<=0) {
    $result = mysqli_query($conn,$sql);
    if($result)
        echo "Record added successfully";
    else 
        echo "Error Please check";   
}else{
    echo "Record already exist...";
}
?>