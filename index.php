<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">nombre</label>
        <input type="text" name="name">
        <label for="">correo</label>
        <input type="text" name="email">
        <label for="">mensaje</label>
        <textarea name="msg" id="" cols="30" rows="10"></textarea>
        <button type="submit" name="enviar">enviar</button>
    </form>
    <?php
    include("./correo.php");
    ?>
</body>
</html>