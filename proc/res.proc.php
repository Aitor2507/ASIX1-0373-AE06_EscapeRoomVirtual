<?php

// Si se envia el formulario y respuesta correcta entonces se pasa el reto2 sino se redirige hacia el index con un mensaje
if (isset($_POST['reto1']) && strtolower($_POST['respuesta1']) == 'hac' && strtolower($_POST['respuesta1.1']) == 'k') {
    // Creo la sesión por 1ra vez.
    session_start();
    $_SESSION['reto1'] = 'check';
    header('Location:../view/reto1.php');
} else if (isset($_POST['index'])){
    header('Location:../index.php?msg=H***');
}

// Reto1 -> Reto2
else if (isset($_POST['reto2']) && strtolower($_POST['respuesta2']) == '192.168.1.1'){
    // Recupero la sesión
    session_start();
    $_SESSION['reto2']= 'check';

    header('Location: ../view/reto2.php');
} else if (isset($_POST['reto1'])){
    header('Location: ../view/reto1.php?msg=mensaje');
}


// Reto2 -> Reto3
else if (isset($_POST['reto3']) && strtolower($_POST['respuesta3']) == 'hello world'){
    // Recupero la sesión
    session_start();
    $_SESSION['reto3']= 'check';

    header('Location: ../view/reto3.php');
} else if (isset($_POST['reto2'])){
    header('Location: ../view/reto2.php?msg=mensaje');
}



// Reto3 -> Reto4
else if (isset($_POST['reto4']) && strtolower($_POST['respuesta4']) == 'hacker'){
    // Recupero la sesión
    session_start();
    $_SESSION['reto4']= 'check';

    header('Location: ../view/reto4.php');
} else if (isset($_POST['reto3'])){
    header('Location: ../view/reto3.php?msg=mensaje');
}

?>