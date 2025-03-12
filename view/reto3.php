<?php // Esto evita que se salte el primer paso
// session_start();
// if (!$_SESSION['reto2'] == 'check') {
//     header('Location: ../index.php?error=trampas');
// }
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/svg" href="../img/puzzle-piece-solid.svg">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Reto 3 - Desencriptación</title>
</head>

<body>
<!--Esto es un codigo cesar que se debe revelar mirando toda la pagina y haciendo una operacion combinada-->
<form method="post">
    <p>Desencripta el siguiente mensaje: KHOOR ZRUOG</p>
    <input type="text" name="respuesta" required>
    <button type="submit">Enviar</button>
</form>

<!-- Botón escondido con enlace a información sobre el Código César -->
<button class="boton-escondido" onclick="window.open('https://ayudaleyprotecciondatos.es/2020/06/10/cifrado-cesar/', '_blank')">
    ??
</button>

</body>

</html>