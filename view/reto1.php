<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/svg" href="../img/puzzle-piece-solid.svg">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Reto 1 - Codigo binario</title>
</head>

<body>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['respuesta1'] == "hack") {
            $_SESSION['reto1'] = "hack";
            header('Location:reto2.php');
        } else {
            header('Location:../index.php');
            exit();
        }
    }
    ?>

<form action="../proc/res.proc.php" method="post">
    <p>Introduce la palabra en texto plano correspondiente a este código binario: 01101000 01100001 01100011 01101011.</p>
    <input type="text" name="respuesta" required>
    <button type="submit" value="enviar">Enviar</button>
</form>

</body>

</html>

