<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="user/exit.php" method="post">

    <p><input type="button" value=" Нажми меня нежно "></p></form>
<form>
<!--    <form action="../registration/usercontroller.php" method="post">-->


    <a href="registration/registration.php" >Registration </a>
    <a href="user/exit.php" class="nubex">Кнопка-ссылка</a>
    <br>
    <a href="registration/login.php" >Login </a>
    <? session_start();?>
    <?if(isset($_SESSION['user'])):?>
        <h1><?=$_SESSION['user']['name']?></h1>
    <a href="index.php">Работает Никита молодц, а ели нет..../a>


    <?endif;?>
</form>
</body>
</html>