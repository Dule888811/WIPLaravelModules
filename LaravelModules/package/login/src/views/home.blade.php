<!DOCTYPE html>
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
<a href="" name="showUser" id ="showUser">show user</a>
<a href="" name="getUserOverCurl" id ="getUserOverCurl">get user over curl</a>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">

$(document).ready(function() {    
 $.ajaxSetup({
    headers: {
    /*     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         }
                    }); */
    $('#showUser').click(function (event) {
        event.preventDefault();
            $.ajax({
                type: 'GET',
                url: "api/data/{{$id}}",
                dataType: "json",
                contentType : application/json,
                success: function (data) {
                    alert(data.email); 
                }
            });
    });
  
            $("#formUser").submit(function (event) {
            event.preventDefault();
            $.ajax({
            type: 'GET',
            url: "api/data/{{$id}}",
            dataType: "JSON",
            contentType : application/json
           // cache :false,
           // processData: false,
        }
           .then(function (data) {
                prompt('yes');
                userData.empty();
                userData.append('<li>' + data.name + '</li>' + '<li>' + data.email  '</li>')        
            });
               
           
            }
        });
            });
        });
});
</script>
</body>
</html>