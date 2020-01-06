<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<a href="" name="showUser" id ="showUser">show user</a>
<a href="#" name="getUserOverCurl" id ="getUserOverCurl">get user over curl</a>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">

$(document).ready(function() {    
 $.ajaxSetup({
  /*  headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         }
                    }); */
    $('#showUser').click(function (event) {
        event.preventDefault();
            $.ajax({
                type: 'GET',
                url: "data/{{$user->id}}",
                dataType: "json",
                contentType : application/json,
                success: function (data) {
                    var_dump(json_decode(data)); 
                }
            });
    });
   
});
</script>
</body>
</html>