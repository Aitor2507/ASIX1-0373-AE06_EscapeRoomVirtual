<?php // Esto evita que se salte el primer paso
session_start();
if (!$_SESSION['reto1'] == 'check') {
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
    <title>Reto 2 - IP Privada </title>
</head>

<body>
<!--Tenemos la IP privada en toda la pagina los numeros de IP's luego  que busquemos una mascara como input final-->

<form method="post">
    <p>Tu firewall detectó actividad sospechosa desde una IP privada. El sistema nos indica que la IP debe empezar por 192. ¿Cuál es la correcta?</p>
    <label for="ip">IP sospechosa:</label>
    <input type="text" name="respuesta" value="192." required>
    <label for="mascara">Máscara de subred:</label>
    <input type="text" name="mascara" placeholder="255..." required>
    <button type="submit">Enviar</button>
    
</form>

</body>

</html>