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
    <title>Reto 4 - Hexadecimal</title>
</head>

<body>
<?php if ($_SESSION['reto3'] === 'check') : ?>
        <div id="felicidades">¡Felicidades, pasaste el reto 3!</div>
    <?php endif; ?>
<!--Esto es un codigo hexadecimal que se debe convertir a texto, en caso de que no lo sepa que lo busque en una imagen escondida-->

<form action="../proc/res.proc.php" method="post">
    <p>Convierte este código hexadecimal a texto: 4861636b6572</p>
    <input type="text" name="respuesta4" required><br>
    <button type="submit"  name="enviar4" class="btn-1">Enviar</button>
</form>

<a href="https://es.wikipedia.org/wiki/Chema_Alonso", target="_blank">
        <img src="../img/hacker.jpg" alt="Hacker" id="hacker">
</a>
<script>
    setTimeout(() => {
        document.getElementById('felicidades').style.display = 'none';
    }, 3000); 
</script>
</body>

</html>