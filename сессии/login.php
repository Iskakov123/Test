<?php
  session_start();
  $user_email=$_SESSION["email"];
  if($user_email==""){
    header("Location:/lab3/index.php");
  }
  elseif(isset($_GET["logout"]) && $_GET["logout"]=="yes"){
    session_destroy();
    header("Location:/lab3/index.php");
  }
?>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <style>
    a {
        color: red;
        font-size: 24px;
        padding: 20px 30px;
        text-decoration: none;
    }
    </style>
</head>

<body class="">
<h1> Здравствуй, <?=$_SESSION["email"]?></h1>
<a href="/lab3/login.php?logout=yes" class="link">Logout</a>
<style>
.link {
    display: block;
    padding: 5px 10px;
    background-color: #123FF3;
    color: white;
    width: 200px;
    border-radius: 10px;
    text-align: center;
}
body {
    display: flex;
    flex-direction: column;
    align-items: center;

}
</style>
</body>

</html>