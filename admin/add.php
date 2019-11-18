<?php 
include_once('../include/connect.php');
include_once('header.php');
if(isset($_REQUEST['question'])) { 
    $question = $_REQUEST['question'];
    $a = $_REQUEST['option1'];
    $b = $_REQUEST['option2'];
    $c = $_REQUEST['option3'];
    $d = $_REQUEST['option4'];
    $ans = $_REQUEST['answer'];
    $exp = $_REQUEST['exp'];

    $sql = "insert into question(question,option1,option2,option3,option4,ans,exp) values('". $question . "','". $a ."','". $b ."','". $c ."','". $d ."','".$ans ."','". $exp ."');";
    $conn = database_connection();
    if(mysqli_query($conn,$sql))
        echo "<script> alert('Record added successfully');</script>";
    else {
        echo "<script> alert('Error Please check');</script>";   
    }
    mysqli_close($conn);
}
?>
<div class="content">
    <h1>Add New Question</h1>
    <hr><br/>
    <div class="container" style="border:none;">
   
        <form action=""method ="post">
            <div class="add-record">
            <label for="question">Question </label>
                <textarea name="question" id="question" cols="100%" rows="10"></textarea><br/>
            <label for="option1">Option1</label>
                <textarea name="option1" id="option1" cols="100%" rows="1"></textarea><br />
            <label for="option1">Option2</label>
                <textarea name="option2" id="option2" cols="100%" rows="1"></textarea><br />
            <label for="option1">Option3</label>
                <textarea name="option3" id="option3" cols="100%" rows="1"></textarea><br />
            <label for="option1">Option4</label>
                <textarea name="option4" id="option4" cols="100%" rows="1"></textarea><br /><br />
            <label for="answer">Answer</label>
                <input type="text" name="answer" id="answer"><br/><br />
            <label for="exp">Explanation :</label>
                <textarea name="exp" id="exp" cols="100%" rows="4"></textarea><br />
            <button type="submit" id="SaveQuestion">Save Question</button>    
         
        </form>
   
</div>
<?php include_once('footer.php');?>