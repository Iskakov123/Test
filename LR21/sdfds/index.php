<?
if (isset($_POST["email"]) && isset($_POST["pass"]) && $_POST["pass"] != "") {
	$user_email = $_POST["email"];
	$user_pass = $_POST["pass"];
	setcookie("email", $user_email, time()+3600); 
	setcookie("pass", $user_pass, time()+3600); 
	//header("Location: /sdfds/");
	print_r($_POST);
}

print_r($_COOKIE);


if (isset($_POST["email"]))

?>


<form action="/sdfds/" method="POST">
<div class="col-auto" style ="margin-bottom: 10px; margin-top: 10px">
  <label for="exampleFormControlInput1" class="form-label">Login</label>
  <input name ="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Login">
</div>
<div class="col-auto" style ="margin-bottom: 10px; ">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input name ="pass" type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirm</button>
  </div>
</form>




<head>
</head>
<body >



</body>