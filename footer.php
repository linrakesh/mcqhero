<footer id="footer" class="container">
        <div class="copyright">
            <p>All rights reserved to Binarynote.com</p>
        </div>
        <div class="footer-menu">
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Content Policy</a></li>
                <li><a href="#">Disclaimer</a></li>
            </ul>
        </div>
    </footer>
    
    <p><center>Made in India with Love and Php</center></p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
     jQuery(function($){
        $('#grade').on('change', function(){
            let grade_val = $("#grade").val();
           /*  alert(grade_val); */
            $.post('show_subject.php', { grade: grade_val },function(data,status){
                $('#subject').html(data);
            })
        })

        $("#subject").on("change",function(){
             let grade_val = $("#grade").val();
             let sub_val =   $("#subject").val();
             alert(grade_val + sub_val )
             $.post('show_topic.php', { grade: grade_val, subject:sub_val },function(data,status){
                $('#topic').html(data); 
                /* console.log(data); */
                
            })
        })
     });   
</script>
</body>
</html>