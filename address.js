function load() {
  var check = document.getElementById("check");

  if (check.checked) {
    $("#sec_street").val($("#street").val());
    $("#sec_city").val($("#city").val());
    $("#sec_state").val($("#state").val());
    $("#sec_zip").val($("#zip").val());
  } else {
    $("#sec_street").val("");
    $("#sec_city").val("");
    $("#sec_state").val("");
    $("#sec_zip").val("");
  }
}
