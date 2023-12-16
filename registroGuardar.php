<?php
    // var_dump($_POST);
    // exit;
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $ubicacion = $_POST['ubicacion'];
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datos suministrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/master.css">
</head>

<body>
    <div class="container-fluid p-0">
    <section class="_imagenFondo">
            <img class="vh-100 w-100" src="https://cdn.pixabay.com/photo/2013/12/03/17/12/ford-223124_1280.jpg" alt="Empresa dedicada al desarrollo de Software">
        </section>
        <section class="row position-absolute top-50 start-50 translate-middle bg-black p-2 text-white bg-opacity-50 w-50 pt-4 pb-4 border border-5  border-secondary-subtle">
        <h1 class>Registro de Datos</h1>
        <h3>Tu nombre es: <?php echo $nombre ?></h3>
        <h3>Tu Apellido es: <?php echo $apellido ?></h3>
        <h3>Tu Email es: <?php echo $email ?></h3>
        <h3>Tu Ubicacion es: <?php echo $ubicacion ?></h3>
        <a class="btn btn-outline-danger w " href="registro.php">Continuar Registrando</a>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./js/master.js"></script>
</body>

</html>