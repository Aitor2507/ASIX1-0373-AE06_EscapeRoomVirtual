<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/svg" href="img/puzzle-piece-solid.svg">
    <link rel="stylesheet" href="css/styless.css">
    <title>Escape Room - Un pequeño problema en mi PC</title>
    
</head>

<body>
    <div class="matrix-container"></div>

    <h2>Un pequeño problema en mi PC</h2>

    <table border="1px" class="matrix-container">

        <p> Eres un analista de ciberseguridad trabajando en tu computadora como cualquier otro día hasta que algo extraño sucede. De repente, la pantalla se llena de código corrupto, la interfaz cambia y un mensaje aparece:

        "SISTEMA CORROMPIDO. ACCESO DENEGADO. INTRODUCE LAS PALABRAS CLAVE CORRECTAS PARA RECUPERAR EL CONTROL DEL SISTEMA."

        Parece que alguien ha activado un bloqueo en tu sistema. Si no resuelves los acertijos a tiempo, tu equipo quedará inutilizado y todos tus archivos desaparecerán para siempre.

        Tu única opción es navegar por los cuatro niveles de seguridad del sistema y descifrar los códigos correctos. Pero ten cuidado, porque si fallas, serás expulsado al nivel anterior y el sistema se volverá más inestable.

        ¿Tienes las habilidades necesarias para hackear tu propio sistema y recuperar el control antes de que sea demasiado tarde? 

        
        Suerte. El tiempo corre... 
        </p>

    </table>

    <div class="style_form">
    <form action="proc/res.proc.php" method="POST">
            <a href="view/reto1.php">Iniciar el reto</a>
    </form>
    <script>
        const matrixContainer = document.querySelector('.matrix-container');

        // Caracteres que simulan el código de Matrix
        const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%^&*()_+";

        // Función para generar un carácter aleatorio
        function getRandomCharacter() {
            return characters[Math.floor(Math.random() * characters.length)];
        }

        // Función para crear una columna de caracteres
        function createMatrixStream() {
            const stream = document.createElement('div');
            stream.classList.add('matrix-stream');

            // Posición horizontal aleatoria
            stream.style.left = `${Math.random() * 100}vw`;

            // Duración de la animación aleatoria
            stream.style.animationDuration = `${Math.random() * 5 + 3}s`;

            // Generar caracteres aleatorios
            let content = '';
            for (let i = 0; i < 30; i++) {
                content += getRandomCharacter() + '<br>';
            }
            stream.innerHTML = content;

            // Agregar la columna al contenedor
            matrixContainer.appendChild(stream);

            // Eliminar la columna después de que termine la animación
            setTimeout(() => {
                stream.remove();
            }, parseFloat(stream.style.animationDuration) * 1000);
        }

        // Crear columnas de caracteres continuamente
        setInterval(createMatrixStream, 70);
    </script>
    </div>

</body>

</html>