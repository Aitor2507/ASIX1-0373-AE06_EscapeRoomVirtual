<?php // Esto evita que se salte el primer paso
session_start();
if (!$_SESSION['reto2'] == 'check') {
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
    <title>Reto 3 - Desencriptación</title>
</head>

<body>
<?php if ($_SESSION['reto2'] === 'check') : ?>
        <div id="felicidades">¡Felicidades, pasaste el reto 2!</div>
    <?php endif; ?>
<!--Esto es un codigo cesar que se debe revelar mirando toda la pagina y haciendo una operacion combinada-->
<form action="../proc/res.proc.php" method="post">
    <p>Desencripta el siguiente mensaje: KHOOR ZRUOG</p>
    <input type="text" name="respuesta3" required>
    <div id="desplazamiento"><br>
    <label for="desplazamiento">Pista -> Cuál es la respuesta de esta operación combinada: (5x2)-(10+3) </label>
    <input type="number" name="desplazamiento" placeholder="Desplazamiento" min="-6" max="6" required>
    </div><br>
    <button type="submit"  name="enviar3" class="btn-1">Enviar</button>
</form>

<!-- Botón escondido con enlace a información sobre el Código César -->
<button class="boton-escondido" onclick="window.open('https://ayudaleyprotecciondatos.es/2020/06/10/cifrado-cesar/', '_blank')">
    ??
</button>
<script>
    setTimeout(() => {
        document.getElementById('felicidades').style.display = 'none';
    }, 3000); 
</script>
</body>

</html>