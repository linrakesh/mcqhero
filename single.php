<?php include_once('header.php');?>
    <?php 
        $grade = $_POST['grade'];
        $subject = $_POST['subject'];
        $topic  = $_POST['topic']; 
     
    ?>
    <div class="container">
        <div class="content">
            <h2> Grade- <?php show_name('grade',$grade); ?>  Subject - <?php show_name('subject',$subject);?>  Total Questions : <?php echo count_record($grade,$subject,$topic);?> </h2>
            <h1>Topic Coverd : <?php  show_name('topic',$topic); ?></h1>
            <?php show_questions($grade,$subject,$topic);
            ?>
        </div>
        <div class="right-sidebar">
            <h3>Sidebar will appear here </h3>
        </div>
    </div>
<?php include_once('footer.php');?>
    