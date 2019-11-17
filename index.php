<?php include_once('header.php');?>
    <div class="container-home">
      <div class="grade-selection">
        <h1> Please select grade and Subject</h1>
        Select Grade :
        <select name="grdae" id="grade">
            <option value="1">Class 11 </option>
            <option value="2">Class 12 </option>
        </select> <br/>
        select Subject :
        <select name="subject" id="subject">
            <option value="English">english</option>
            <option value="Math">Math</option>
            <option value="Accoutancy">Accoutancy</option>
            <option value="Business studies">BS</option>
            <option value="Economics">Economics</option>
        </select> <br/>
        <button class="button" name="proceed" id="proceed" value="submit">Proceed</button>
    </div>
  </div>
<?php include_once('footer.php');?>
    