<?php

session_start();
$_SESSION['csrf_token'] = sha1(rand(1, 20000));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="send.php" method="post">
        <input type="hidden" name="_csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <input name="nome" type="text" placeholder="Nome"><br>
        <input name="url" type="text" placeholder="Seu site"><br>
        <input name="email" type="email" placeholder="Email"><br>
        <textarea name="descricao" placeholder="Descrição"></textarea><br>
        <img src="captcha.php">
        <input name="_captcha" type="text" placeholder="Digite as letras acima">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
