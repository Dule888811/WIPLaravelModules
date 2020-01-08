<!--!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<form id="formUser" action="">
<input type="submit" value="showUser">
</form>
<div id="showEmail"></div>
<ul id="userData"></ul>
<a href="../api/data/{{$id}}" name="showUser" id ="showUser">show user</a>
<a href="{{route('index')}}" name="getUserOverCurl" id ="getUserOverCurl">get user over curl</a>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">

$(document).ready(function() {    
    $('#showUser').click(function (event) {
        event.preventDefault();
            $.ajax({
                type: 'GET',
                url: "../api/data/{{$id}}",
                dataType: "json",
                contentType : application/json,
                success: function (data) {
                   $('#showEmail').append("<span>" + data + "</span>"); 
                }
            });
    });
            });
        });
});
</script>
</body>
</html>