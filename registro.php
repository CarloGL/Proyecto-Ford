<?php

try {

    $bd = new PDO("mysql:host=localhost;dbname=parcial", 'root', '');
    // var_dump($bd);
    // exit;

} catch (PDOException $error) {

    echo '<h2 class="alert alert-danger text-center my-0"> Ah ocurrido un error '. $error->getMessage() .'</h2>';

}?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/master.css">
</head>

<body>
    <div class="container-fluid p-0">

        <section class="_imagenFondo">
            <img class="vh-100 w-100" src="https://cdn.pixabay.com/photo/2013/12/03/17/12/ford-223124_1280.jpg" alt="Empresa dedicada al desarrollo de Software">
        </section>
        <section class="formulario row position-absolute top-50 start-50 translate-middle bg-white w-50 pt-4 pb-4 border border-5  border-secondary-subtle">
            <article>
                <form action="registroGuardar.php" method="post" class="needs-validation" novalidate>
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Indique su nombre" required>
                        <div class="valid-feedback">
                            Validacion Exitosa
                        </div>
                        <div class="invalid-feedback">
                            El Campo No Puede Quedar Vacio
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" id="apellido" name="apellido" placeholder="Indique su apellido" required>
                        <div class="valid-feedback">
                            Validacion Exitosa
                        </div>
                        <div class="invalid-feedback">
                            El Campo No Puede Quedar Vacio
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-control" type="email" id="email" name="email" placeholder="Indique su correo" required>
                        <div class="valid-feedback">
                            Validacion Exitosa
                        </div>
                        <div class="invalid-feedback">
                            El Campo No Puede Quedar Vacio
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" id="ubicacion" name="ubicacion" placeholder="Indique su ubicacion actual" required>
                        <div class="valid-feedback">
                            Validacion Exitosa
                        </div>
                        <div class="invalid-feedback">
                            El Campo No Puede Quedar Vacio
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-outline-danger">Continuar</button> <a class="btn btn-outline-danger mx-3" href="index.php"> Volver</a>
                    </div>  
                </form>
            </article>

        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="JS/master.js"></script>
</body>

</html>