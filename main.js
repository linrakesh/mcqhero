jQuery(function($) {
  $("#grade").on("change", function() {
    let grade_val = $("#grade").val();
    /*  alert(grade_val); */
    $.post("show_subject.php", { grade: grade_val }, function(data, status) {
      $("#subject").html(data);
    });
  });

  $("#subject").on("change", function() {
    let grade_val = $("#grade").val();
    let sub_val = $("#subject").val();
    /* alert(grade_val + sub_val ) */
    $.post("show_topic.php", { grade: grade_val, subject: sub_val }, function(
      data,
      status
    ) {
      $("#topic").html(data);
      /* console.log(data); */
    });
  });

  $("#topic").on("change", function() {
    $("#proceed").addClass("red");
  });

  $("#proceed").click(function(e) {
    let grade = $("#grade").val();
    let sub = $("#subject").val();
    let top_val = $("#topic").val();
    alert(grade);
    alert(sub_val);
    alert(topic_val);
    if (empty(grade_val) && sub_val && empty(top_val)) {
      alert("Please select grade subject and topic first.....");
      return false;
    }
  });
});
