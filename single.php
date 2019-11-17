<?php include_once('header.php');?>
    <?php session_start();
        if(!isset($_SESSION['offset'])) 
            $_SESSION['offset'] =0;
        else {
              if($_SESSION['offset']>=15) {
                echo "<script> alert('List finished...Start again');</script>";  
                $_SESSION['offset'] =0;
               }else{
                   $_SESSION['offset'] +=5;
               }
         }
    ?>
    <div class="container">
        <div class="content">
            <h1> Grade- 12  Subject - Physics <?php count_record();?> </h1>
            <?php $offset = $_SESSION['offset']; show_questions($offset);
                  
            ?>
            <a class="button" href="single.php"> Next </a>
        </div>
        <div class="right-sidebar">
            <h3>Sidebar will appear here </h3>
        </div>
    </div>
<?php include_once('footer.php');?>
    