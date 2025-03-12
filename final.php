<?php // Esto evita que se salte el primer paso
session_start();
if (!$_SESSION['reto4'] == 'check') {
    header('Location:index.php?error=trampas');
}
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/svg" href="img/puzzle-piece-solid.svg">
    <link rel="stylesheet" href="css/styles.css">
    <title>Equipo Desbloqueado</title>
</head>
<body>
    

<h1>¡Felicidades! Reto superado</h1>
<a href="proc/replay.proc.php">Volver al inicio</a>
</body>
</html>