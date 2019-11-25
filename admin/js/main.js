jQuery(function ($) {
    function isBlank(str) {
        return (!str || /^\s*$/.test(str) || 0 === str.length);
    }

    $("#grade").on("change", function () {
        let grade_val = $("#grade").val();
        /*  alert(grade_val); */
        $.post("show_subject.php", { grade: grade_val }, function (data, status) {
            $("#subject").html(data);
        });
    });

    $("#subject").on("change", function () {
        let grade_val = $("#grade").val();
        let sub_val = $("#subject").val();
        /* alert(grade_val + sub_val ) */
        $.post("show_topic.php", { grade: grade_val, subject: sub_val }, function (
            data,
            status
        ) {
            $("#topic").html(data);
            /* console.log(data); */
        });
    });

    $("#topic").on("change", function () {
        $("#proceed").addClass("red");
    });

    $("#SaveQuestion").click(function (e) {
        let grade       = $("#grade").val();
        let sub         = $("#subject").val();
        let top_val     = $("#topic").val();
        let question    = $('#question').val();
        let option1     = $('#option1').val();
        let option2     = $('#option2').val();
        let option3     = $('#option3').val();
        let option4     = $('#option4').val();
        let ans         = $('#answer').val();
        let exp         = $('#exp').val();

        /* alert(grade);
        alert(sub_val);
        alert(topic_val); */
        if (isBlank(grade) || isBlank(sub) || isBlank(top_val) || isBlank(question) || isBlank(option1) || isBlank(option2) || isBlank(option3) || isBlank(option4) || isBlank(ans) ) {
            alert("Please select grade subject and topic first.....");
            return false;
        }else{
            e.preventDefault();
            $.post('insert_record.php',{ grade : grade, subject: sub, topic: top_val, question: question,  option1: option1, option2: option2, option3: option3, option4 : option4, answer:  ans,exp:  exp },function(data,status){
                alert(data);
                /* $('#question').empty();
                $('#option1').empty();
                $('#option2').empty();
                $('#option3').empty();
                $('#option4').empty();
                $('#answer').empty();
                $('#exp').empty(); */
                location.href = 'add.php';
            })
        }
    });
});

jQuery(function($){
    $('#loginsubmit').click(function(){
        let uname = $('#uname').val();
        let upass = $('#upass').val();
        if(uname=='' || upass=='')
            alert('Hi rakesh how are you'); 
        else {
            $.post('uservalidation.php',{uname:uname,password:upass},function(data,status){
                if(data==1){
                    location.href="index.php";
                }else{
                    alert('User does not exit....Please try again');
                }
            });
        }
    });
});

/*--------------add grade in database and populate the results------------*/
jQuery(function($) {
   $('#addgrade').click(function(){
       let grade = $('#grade').val();
       $.post('insert_grade.php',{grade:grade},function(data,status){
            alert(data,+ " Added Successfully");
            location.href = 'addgrade.php';
       });
   }); 
});


/*--------------add subject in database and populate the results------------*/
jQuery(function ($) {
    $('#addsubject').click(function () {
        let subject = $('#subject').val();
        $.post('insert_subject.php', { subject: subject }, function (data, status) {
            alert(data, + " Added Successfully");
            location.href = 'add_subject.php';
        });
    });
});



/*--------------add topics in database and populate the results------------*/
jQuery(function ($) {
    $('#addTopic').click(function () {
        let topic = $('#topic').val();
        $.post('insert_topic.php', { topic: topic }, function (data, status) {
            alert(data, + " Added Successfully");
            location.href = 'add_topic.php';
        });
       /*  console.log(topic); */
    });
});


/*-------------attach subject with each grade---------------------*/
jQuery(function ($) {
    $('#GradeSubjectAssign').click(function () {
        let subject = $('#subject1').val();
        let grade   = $("#grade1").val();

        $.post('insert_gradesubject.php', {grade: grade , subject: subject }, function (data, status) {
            alert(data, + " Added successfully in grade table");
            location.href = 'grade_subject_assignment.php';
        }); 
        console.log(grade,subject);
    });
});


/*-------------attach topic with grade and subject ---------------------*/
jQuery(function ($) {
    $('#GradeSubjectTopicAssign').click(function () {
        let subject = $('#subject1').val();
        let grade = $("#grade1").val();
        let topic  = $("#topic1").val();

        $.post('insert_gst.php', { grade: grade, subject: subject, topic:topic }, function (data, status) {
             alert(data);
             location.href = 'gst_add.php';
         });
        console.log(grade, subject,topic);
    });
});
