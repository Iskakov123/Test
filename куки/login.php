<?
if(!isset($_COOKIE["email"]))
{
header("Location:/lab2/index.php");
}
  $user_email=$_COOKIE["email"];
  if(isset($_GET["logout"]) && $_GET["logout"]=="yes"){
    setcookie("email","");
    setcookie("psw","");
    header("Location:/lab2/index.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Приветствую</title>
    
    <link href="style.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container">
      <h1>Здравствуй, <?=$user_email?></h1>
      <a href="/lab2/login.php?logout=yes">Выйти</a>
      <style>
        a {
          background-color: blue;
          padding: 5px 10px;
          display: block;
          color: white;
          width: 200px;
          margin: 20px auto;
          text-decoration: none;
        }
        a:hover {
          background-color: #ff123f;
          color: white;
        }
      </style>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>