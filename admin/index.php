<?php 
	session_start();
	if(!isset($_SESSION['uname']) || !isset($_SESSION['upass']) ){
		echo "<script>location.href='login.php'</script>";
	}
?>
<?php 
	include_once('../include/connect.php');
	include_once('header.php');
?>
<div class="content">
	<?php $conn = database_connection();
		  $sql = "select * from question order by qid desc;";
		  $result = mysqli_query($conn, $sql);
		  echo '<h1> Available Questions</h1><hr/><br/>';
		  while($row = mysqli_fetch_array($result)){
			  echo 'Q'. $row[0].'   '.$row[1].'<br/>';
		  } 
		  mysqli_close($conn);
	?>
</div>
<?php include_once('footer.php'); ?>