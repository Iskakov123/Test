<?
unset($_GET['error']);
if(isset($_COOKIE["email"])&&isset($_COOKIE["psw"])){
  header("Location:/lab2/login.php");
}elseif(isset($_POST["email"]) && isset($_POST["psw"]) && $_POST["psw"]!="" && $_POST["psw"]=="123"){
    $user_email=$_POST["email"];
    $user_pass=$_POST["psw"];
    setcookie("email",$user_email,time()+3600);
    setcookie("psw",$user_pass,time()+3600);
    header("Location:/lab2/login.php");
  }elseif($_POST["psw"]!="" && $_POST["psw"]!="123"){
    $_GET['error']=1;
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Вход</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container d-flex justify-content-center align-items-center">
    <?php if(isset($_GET['error']) && $_GET['error'] == 1)
    { ?>
        <h3>Неверный пароль</h3>
      <?php } ?>
      <form action="/lab2/index.php" method="POST" class="border w-50 align-center my-4 py-4 px-3 d-flex align-items-center flex-column">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="text" name="email" class="form-control" id="">
        </div>
        <div class="mb-3">
          <label for="psw" class="form-label">Password</label>
          <input type="password" name="psw" class="form-control" id="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>