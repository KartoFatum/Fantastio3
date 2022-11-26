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
<? session_start();?>
<?if(isset($_SESSION['user'])):?>
    <h1><?=$_SESSION['user']['name']?></h1>
    <form action="/registration/usercontroller.php" method="post">
        <input type="submit" name="logout" value="Выйти" >

    </form>
<?endif;?>
</body>
</html>