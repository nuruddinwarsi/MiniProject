$(document).ready(function() {
  function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var details = document.getElementById("details");
    if (checkBox.checked) {
      details.style.display = "block";
    } else {
      details.style.display = "none";
    }
  }

  // FORM VALIDATION
  $("#submit").click(function() {
    var uname = $("#uname").val();
    var email = $("#email").val();
    var pw = $("#pw").val();
    var pw2 = $("#pw2").val();

    //USERNAME VALIDATION
    if (uname.length == 0) {
      alert("Username cant be empty");
    } else if (!uname.match(/^[0-9]{10}$/)) {
      alert("Username must be a valid phone no");
    }

    // EMAIL VALIDATION
    if (email.length == 0) {
      alert("Email cant be empty");
    } else if (!email.match(/^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/)) {
      alert("Email id must be valid");
    }

    // PASSWORD VALIDATION
    if (pw.length == 0) {
      alert("Password cant be empty");
    } else if (pw.length < 8) {
      alert("Password must be minimum 8 characters ");
    } else if (!pw.match(/^(?=.*[a-z])(?=.*[A-Z](?=.*[0-9]))$/)) {
      alert(
        "Password must contain atlest 1 lowercase, 1 uppercase and 1 number"
      );
    } else if (!pw.match(pw2)) {
      alert("Both passwords must match");
    }
  });
});
