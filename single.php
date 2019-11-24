<?php include_once('header.php');?>
    <?php

        session_start();
        if(isset($_SESSION['grade'])){
            $grade = $_SESSION['grade'];
            $subject = $_SESSION['subject'];
            $topic  = $_SESSION['topic'];
        } else{
            header('location:index.php');
        }

    ?>
    <div class="container">
        <div class="content">
            <h2> Grade- <?php show_name('grade',$grade); ?>  Subject - <?php show_name('subject',$subject);?>  Total Questions : <?php $record = count_record($grade,$subject,$topic); echo $record;?> </h2>
            <h1>Topic Coverd : <?php  show_name('topic',$topic); ?></h1>
            <?php 
            if(isset($_GET['page']))
                $page = $_GET['page'];
            else {
                $page = 1;
            }
            $pages = ceil($record/5);
            $start =($page-1)*5;
            $end = $start+5; 
            
            $con = database_connection();
            $sql = "select  * from question where gid=" . $grade . " and sid=".$subject ." and tid =". $topic ." limit {$start},{$end};";
            $result = mysqli_query($con, $sql);
            /* print_r($result);*/
            $total_record = mysqli_num_rows($result);
            /* echo 'Total pages required :'.$pages .'<br/>'; */
            while($row = mysqli_fetch_assoc($result)){
                echo 'Q'. $row['qid'].'.   '.$row['question']."<br/> A.".$row['option1'].'<br/> B.';
                echo $row['option2'].'<br/>C.'.$row['option3'].'<br/>D.';
                echo $row['option4'].'<br/> <div class="show_answer"> Show Answer </div>'. $row['ans'].'<div class="show_exp"> Show Explaination : </div>';
                echo '<div class="answer">'.$row['ans'].'</div>';
                echo '<div class="explain">'.$row['exp']."</div><br/>";
            }
            mysqli_free_result($result);
            mysqli_close($con);
            
            echo '<div class="pagination"><ul>';
            for( $i=1; $i<=$pages; $i++){
                echo '<li><a href="single.php?page='. $i . '"> '. $i .' </a></li>';
            }
            echo '</ul></div>';
            //show_questions($grade,$subject,$topic);
            ?>
        </div>
        <div class="right-sidebar">
            <?php include_once('sidebar.php');?>
        </div>
    </div>
<?php include_once('footer.php');?>
