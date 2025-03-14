<?php // Esto evita que se salte el primer paso
session_start();
if (!($_SESSION['reto1'] == 'check')) {
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
<?php if ($_SESSION['reto1'] === 'check') : ?> <!--Reto1 superado se felicita en cuanto los siguientes igual pero con su anterior reto-->
        <div id="felicidades">¡Felicidades, pasaste el reto 1!</div>
    <?php endif; ?>
<!--Tenemos la IP privada en toda la pagina los numeros de IP's luego  que busquemos una mascara como input final-->
 
<form action="../proc/res.proc.php" method="post">
    <p>Tu firewall detectó actividad sospechosa desde una IP privada. El sistema nos indica que la IP debe empezar por 192. ¿Cuál es la correcta?</p>
    <label for="ip">IP sospechosa:</label>
    <input type="text" name="respuesta2" value="192." required>
    
    <label for="mascara">Máscara de subred:</label>
    <input type="text" name="mascara2" placeholder="255..." required><br>
    <button type="submit" name="enviar2" class="btn-1">Enviar</button>
    <br><br><div id="mensaje" style="color: red; " >Pista: Si no se te da bien redes puedes buscar por la página. </div>
    <img src="../img/img_reto_2.PNG" alt="Imagen reto 2" id="img_reto2">
    
</form>
<script>
    // Ocultar msj despues de 3s
    setTimeout(() => {
        document.getElementById('felicidades').style.display = 'none';
    }, 3000); 
</script>
</body>

</html>