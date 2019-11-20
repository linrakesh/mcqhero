</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
     jQuery(function($){
        $('#proceed').click(function(){
            let grade = $('#grade').val();
            let subject = $('#subject').val();
            console.log(grade,subject);
            window.location ='single.php';
        });
     });   
</script>
</body>
</html>