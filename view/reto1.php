<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="img/svg" href="../img/puzzle-piece-solid.svg">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Reto 1 - Codigo binario</title>
</head>

<body>
    <?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['respuesta1'] == "hack" && $_SESSION['respuesta1.1'] == "k") {
            header('Location:reto2.php');
        } elseif(!($_SESSION["reto1"] == 'check')) {
            header('Location:../index.php');
            exit();
        }
    }
    ?>

<form method="post">  
    <p>Introduce la palabra en texto plano correspondiente a este código binario: 01101000 01100001 01100011 </p>
    <input type="text" name="respuesta1" required>
    <div class="acertijo_reto1"> <!--//  style="visibility: hidden;"-->
<p>¿¿Buscabas esto??   01101011</p>
<input type="text" name="respuesta1.1" required>
    </div>
    <button type="submit" value="enviar">Enviar</button>
</form>

</body>

</html>

