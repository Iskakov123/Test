<?php
session_start();
if(isset($_SESSION["email"])){
  header("Location:/lab3/login.php");
}
elseif(isset($_POST["email"]) && isset($_POST["pass"]) && $_POST["pass"]!="" && $_POST["pass"]=="123"){
    $user_email=$_POST["email"];
    $user_pass=$_POST["pass"];
    $_SESSION["email"]=$user_email;
    $_SESSION["pass"]=$user_pass;
    header("Location:/lab3/login.php");
  }else if(isset($_POST["email"]) && (isset($_POST["pass"])!="" || isset($_POST["pass"])!="123")){
    $error="Неверный параль";
    $_SESSION['error']=$error;
  }

?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Привет мир!</title>
  </head>
  <body class="d-flex justify-content-center align-items-center flex-column">
    <?php
    if ($error)
    {
      ?>
        <h3><?php echo $error ?></h3>
      <?
    }
    ?>
    <h2 class="my-3">Авторизация</h2>
    <form class='m-4 p-4 border rounded' action="/lab3/index.php" method="post">
  <div class="form-group">
    <label for="email">Login</label>
    <input type="email" class="form-control my-2" id="email" aria-describedby="loginHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control my-2" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>
  <button type="submit" class="btn btn-primary my-2">Войти</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>