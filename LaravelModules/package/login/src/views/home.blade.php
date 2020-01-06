<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<a href="#" name="showUser" id ="showUser">show user</a>
<a href="#" name="getUserOverCurl" id ="getUserOverCurl">get user over curl</a>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">

$(document).ready(function() {
    $.ajax({
    type: 'GET', //THIS NEEDS TO BE GET
    url: 'showUser/{{$user->id}}',
    dataType: "JSON",
    contentType : application/json,
success: function (data) {
   alert(data.success);
}
});
});
});
$(document).ready(function() {
$(".btn-success").click(function(){ 
});
</script>
</body>
</html>