<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form >

  username: <input id="username" type="text" ><br>
  email: <input id="email" type="text" ><br>
  password: <input id="password" type="text" ><br>

  <input type="submit" value="Submit" onclick="main()">

</form>
<script src="{{ asset('jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>