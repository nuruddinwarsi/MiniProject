function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var details = document.getElementById("details");
  if (checkBox.checked) {
    details.style.display = "block";
  } else {
    details.style.display = "none";
  }
}
