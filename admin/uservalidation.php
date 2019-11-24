<?php 
    session_start();
    if(isset($_POST['uname']) && isset($_POST['password'])){
        $uname = $_POST['uname'];
        $upass = $_POST['password'];
        include_once('../include/connect.php');
        $conn = database_connection();
        $sql  ="select * from user where uname ='".$uname."' AND upass='".$upass ."';";
        $result= mysqli_query($conn,$sql);
        $total = mysqli_num_rows($result);
        if( $total >= 1){
            $_SESSION['uname'] = $uname;
            $_SESSION['upass'] = $upass;
            echo '1';
        }
        else{
            echo '0';
        }    
    }    
?>