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
<form  action="../proc/res.proc.php" method="post">   
    <p>Introduce la palabra en texto plano correspondiente a este código binario: 01101000 01100001 01100011 </p>
    <input type="text" name="respuesta1" id="respuesta1" required><br>

    <div class="acertijo_reto1">
        <p>¿¿Buscabas esto??  01101011</p>
        <input type="text" name="respuesta1_1" id="respuesta1.1">
    </div>

<br>

    <div id="mensaje" style="color: red; display: none;">¡Busca la última letra, rápido!</div><br>

    <button type="submit" value="enviar" name="enviar1">Enviar</button>
</form>

<script>
    document.getElementById("respuesta1").addEventListener("input", function() {
        const valor1 = this.value.trim().toLowerCase();
        const valor2 = document.getElementById("respuesta1.1").value.trim().toLowerCase();
        const mensaje = document.getElementById("mensaje");

        if (valor1 === "hac" && valor2 !== "k") {
            mensaje.style.display = "block"; // Muestra la alerta
        } else {
            mensaje.style.display = "none"; // Oculta la alerta
        }
    });
</script>

</body>

</html>

