<?php include_once('header.php');?>
    <div class="container-home">
      <form action="single.php" method="post">
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
