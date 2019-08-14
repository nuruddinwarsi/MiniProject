<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type=text/javascript>
            function load(){
                var check = document.getElementById("check");
                var lname = document.getElementById("lname");
                if(check.checked){
                    lname.style.display = "inline";
                    var fname = $("#fname").val();
                    $("#lname").val(fname);
                }else{
                    $("#lname").val('');
                }
            }
    </script>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="fname" id="fname">
        <input type="text" name="lname" id="lname">
        <input type="checkbox" name="check" id="check" onclick="load()">
        <input type="submit" value="submit" >
        
    </form>
</body>
</html>

