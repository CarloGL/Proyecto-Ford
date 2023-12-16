<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CarlosGO</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
  <header class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid p-0">
        <a class="navbar-brand" href="#">
          <img src="img/LOGO.png" alt="Logo" width="70" height="34" class="d-inline-block align-text-top w-100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#inicio">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#vehiculos">Vehiculos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galeria">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contacto">Contactanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro.php">Registro</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2 " type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <section id="incio">
    <div id="carouselExampleIndicators" class="carousel slide">

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/home1.webp" class="d-block w-100" alt="home1">
        </div>
        <div class="carousel-item">
          <img src="img/Home2.webp" class="d-block w-100" alt="home2">
        </div>
        <div class="carousel-item">
          <img src="img/Home3.webp" class="d-block w-100" alt="home3">
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section id="vehiculos">
    <div>
      <h2 class="bg-primary text-white p-3 text-center">Selecciona el Territory a tu medida</h2>
    </div>
  </section>

  <section class="container-fluid mt-3">
    <div class="row">

      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <article class="card">
          <img
            src="https://acroadtrip.blob.core.windows.net/catalogo-imagenes/m/RT_V_449677110e0447ee8fd05d7b81ddf8d5.jpg"
            class="card-img-top" alt="...">
          <div class="card-body">
            <h5 id="autoD" class="card-title">Sel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <p>$9 800.000</p>
            <button id="botonD" class="btn btn-primary">Ver Detalles</button>
          </div>
        </article>
      </div>

      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <article class="card">
          <img
            src="https://acroadtrip.blob.core.windows.net/catalogo-imagenes/m/RT_V_3487ea4a386d4418a06bff4ebf9bd0b0.jpg"
            class="card-img-top" alt="...">
          <div class="card-body">
            <h5 id="autoP" class="card-title">Titanium</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <p>$8 900.000</p>
            <button id="botonP" class="btn btn-primary">Ver Detalles</button>
          </div>
        </article>
      </div>

      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <article class="card">
          <img
            src="https://acroadtrip.blob.core.windows.net/catalogo-imagenes/m/RT_V_3487ea4a386d4418a06bff4ebf9bd0b0.jpg"
            class="card-img-top" alt="...">
          <div class="card-body">
            <h5 id="autoA" class="card-title">Titanium</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <p>$8 900.000</p>
            <button id="botonA" class="btn btn-primary">Ver Detalles</button>
          </div>
        </article>
      </div>

    </div>
  </section>

  <section class="container-fluid mt-3">

    <article class="card col-12 col-md-12 col-lg-12 px-5 py-5">
      <div class="card-body">
        <h2 class="card-title">Territory</h2>
        <p class="card-text align-content-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias itaque
          delectus quos nam quas quis assumenda harum, ducimus quibusdam maxime distinctio blanditiis animi excepturi
          eos inventore, sed dolor provident, mollitia fuga? Tenetur, maxime amet. Aspernatur praesentium voluptates
          saepe at inventore.</p>
        <a href="#" class="btn btn-primary">Ver Mas</a>
      </div>
    </article>

  </section>

  <section class="bg-primary text-white p-3 text-center my-3">
      <h2>Listado de Productos</h2>
  </section>

  <section class="container-xl">
    <table class="table text-center">
      <thead>
        <tr class="table-primary">
          <th scope="col">#</th>
          <th scope="col">CODIGO</th>
          <th scope="col">NOMBRE</th>
          <th scope="col">UNIDADES DISPONIBLES</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>FORD001</td>
          <td>Nueva Territory</td>
          <td>3</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>FORD002</td>
          <td>Edge</td>
          <td>5</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>FORD003</td>
          <td>Bronco Sport</td>
          <td>1</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>FORD004</td>
          <td>Explorer</td>
          <td>1</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>FORD005</td>
          <td>Explorer ST</td>
          <td>1</td>
        </tr>
        <th scope="row">3</th>
          <td>FORD006</td>
          <td>Expedition</td>
          <td>1</td>
        </tr>
      </tbody>
    </table>
  </section>

  <section  class="mt-3">
      <h2 class="bg-primary text-white p-3 text-center my-3">Productos Agotados</h2>
  </section>

  <section id="agotados">
      <ul class="list-group" id="listado">
      </ul>
  </section>

  <section class="mt-3" id="galeria">
    <h2 class="bg-primary text-white p-3 text-center my-3">Galeria</h2>
  </section>

  <section class="conteiner-fluid mt-3">
    <div class="row m-3">
      <article class="col-6 col-md-4 col-lg-3 px-2">
        <img
          src="https://images.pexels.com/photos/3323202/pexels-photo-3323202.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          class="card-img-top" alt="...">
      </article>
      <article class="col-6 col-md-4 col-lg-3 px-2">
        <img
          src="https://images.pexels.com/photos/272374/pexels-photo-272374.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          class="card-img-top" alt="...">
      </article>
      <article class="col-6 col-md-4 col-lg-3 px-2">
        <img
          src="https://images.pexels.com/photos/141500/pexels-photo-141500.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          class="card-img-top" alt="...">
      </article>
      <article class="col-6 col-md-4 col-lg-3 px-2">
        <img
          src="https://images.pexels.com/photos/16033911/pexels-photo-16033911/free-photo-of-coche-vehiculo-conduciendo-camion.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          class="card-img-top" alt="...">
      </article>
    </div>

    <div class="row m-3">
      <article class="col-6 col-md-4 col-lg-3 px-2">
        <img
          src="https://images.pexels.com/photos/3992279/pexels-photo-3992279.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          class="card-img-top" alt="...">
      </article>
      <article class="col-6 col-md-4 col-lg-3 px-2">
        <img
          src="https://images.pexels.com/photos/4529769/pexels-photo-4529769.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          class="card-img-top" alt="...">
      </article>
      <article class="col-6 col-md-4 col-lg-3 px-2">
        <img
          src="https://images.pexels.com/photos/13069032/pexels-photo-13069032.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          class="card-img-top" alt="...">
      </article>
      <article class="col-6 col-md-4 col-lg-3 px-2">
        <img
          src="https://images.pexels.com/photos/14973524/pexels-photo-14973524/free-photo-of-coche-vehiculo-interior-cuero.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          class="card-img-top" alt="...">
      </article>
    </div>

  </section>

  <footer class="container-fluid bg-primary text-light" id="contacto">

    <div class="row">
      <div class="col-3 pt-3">
        <h5 class="">Ford</h5>
        <p>Argentina <br> Buenos aires 1050</p> <br>

        <p>Telefono: 983490993</p>
        <p>Correo: Infoford.com</p>
      </div>
      <div class="col-3 pt-3">
        <h5 class="">Enlaces</h5>
        <a href="#inicio" class="text-light">-Inicio</a> <br>
        <a href="#nosotros" class="text-light">-Nosotros</a> <br>
        <a href="#vehiculos" class="text-light">-Vehiculos</a> <br>
        <a href="#contacto" class="text-light">-Contacto</a>
      </div>
      <div class="col-3 pt-3">
        <h5 class="">Servicios en linea</h5>
        <a href="#inicio" class="text-light">-Presupuestos</a> <br>
        <a href="#inicio" class="text-light">-Financiamiento</a>
      </div>
      <div class="col-3 pt-3">
        <h5 class="">Nuestras redes</h5>
        <p>Mantente Informado de todos los nuevos productos.</p> <br>
        <a href="https://www.facebook.com/" class="text-light">Facebook</a>
        <a href="https://www.instagram.com/" class="text-light">Instagram</a>
        <a href="https://twitter.com/" class="text-light">Twitter</a>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="JS/master.js"></script>
</body>

</html>