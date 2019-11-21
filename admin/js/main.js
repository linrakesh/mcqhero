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
        alert('Hi rakesh how are you');
    });
});