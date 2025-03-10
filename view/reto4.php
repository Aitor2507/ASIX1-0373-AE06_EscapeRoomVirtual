<?php // Esto evita que se salte el primer paso
session_start();
if (!$_SESSION['reto3'] == 'check') {
    header('Location: ../index.php?error=trampas');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/svg" href="../img/puzzle-piece-solid.svg">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Reto 4 -</title>
</head>

<body>
    
<!--Esto es un codigo hexadecimal que se debe convertir a texto-->

<form method="post">
    <p>Convierte este código hexadecimal a texto: 4861636b6572</p>
    <input type="text" name="respuesta" required>
    <button type="submit">Enviar</button>
</form>
</body>

</html>