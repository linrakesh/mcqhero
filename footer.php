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