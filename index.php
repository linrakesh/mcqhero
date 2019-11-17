<?php include_once('header.php');?>

    <div class="container">
        <div class="content">
            <h1> Grade- 12  Subject - Physics <?php count_record();?> </h1>
            <?php $offset = $_SESSION['offset']; show_questions($offset); $_SESSION['offset'] = $_SESSION['offset'] +5;?>
            <a class="btn" href="index.php"> Next </a>
        </div>
        <div class="right-sidebar">
            <h3>Sidebar will appear here </h3>
        </div>
    </div>
<?php include_once('footer.php');?>
    