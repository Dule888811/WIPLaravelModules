<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<form action="{{route('loginUser')}}" method="post">
  @csrf

  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <button type="submit">Login</button>   
  </div>
</form>

</body>
</html>