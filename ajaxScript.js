$.ajax({
  url: "display.php",
  type: "GET",
  datatype: "html",
  success: function(responsedata) {
    $("#response").html(responsedata);
  }
});
