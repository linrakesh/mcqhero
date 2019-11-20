<?php 
  session_unset();
  session_start();
  if(isset($_REQUEST['grade'])){
    $_SESSION['grade'] = $_REQUEST['grade'];
    $_SESSION['subject'] = $_REQUEST['subject'];
    $_SESSION['topic'] = $_REQUEST['topic'];
    echo "<script> location.href='single.php' </script>";
  }
?>
<?php include_once('header.php');?>
    <div class="container-home">
      <form action="" method="post">
      <div class="grade-selection">
        <h1> Please select grade and Subject</h1>
        Select Grade :
        <select name="grade" id="grade">
            <?php show_subject('grade');?>
        </select> <br/>
        select Subject :
        <select name="subject" id="subject">
            <?php show_subject('subject');?>
        </select> <br/>
        select Topic :
        <select name="topic" id="topic">
            <?php show_subject('topic');?>
        </select> <br/>
        <button class="button" name="proceed" id="proceed" value="submit">Proceed</button>
        </form>
    </div>
  </div>
<?php include_once('footer.php');?>
