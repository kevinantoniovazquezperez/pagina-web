<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/css/style_index.css">
    <title>Compras</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <!--logo (imagen que esta en la barra)-->
          <a class="navbar-brand" href="#">
            <img src="./src/img/logo.PNG" alt="..."  id="logo">
          </a>
          <!--opciones de la barra-->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Iniciar Sesión</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Registrarse</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Productos.php">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Conocenos</a>
              </li>
          </div>
        </div>
      </nav>
    <br><br><br><br>
    <div>
      <img src="" class="img-thumbnail" alt="">
    </div>
    <div class="contendor">
      <div class="container text-center">
        <div class="row align-items-start">
          <div class="col">
          </div>
          <form class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Nombre Completo</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-md-6">
              <label class="form-label">Dirección</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-6">
              <label class="form-label">Número de tarjeta</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Tipo de tarjeta</label>
              <select id="inputState" class="form-select">
                <option selected></option>
                <option>Santander</option>
                <option>Visa</option>
                <option>Bancomer</option>
                <option>Banamex</option>
              </select>
            </div>
            <div class="col-6">
              <label class="form-label">Servicios de pago</label>
              <select id="inputState" class="form-select">
                <option selected></option>
                <option>OXXO</option>
                <option>7-Eleven</option>
                <option>Farmacias del Ahorro</option>
              </select>
            </div>
            <div class="col-6, padding">
            </div>
            <div class="col-12">
              <a class="btn btn-primary" href="Productos.html" role="button">Realizar compra</a>              
            </div>
          </div>
          </div>
        </div>
      </form>
    </div>
    <br><br><br><br><br><br><br>
    <footer>    <!--pie de pagina-->
        <div class=row>
          <div class="col">    
            <p>Boulevard Belisario Dominguez, Kilómetro 1081, Sin Número, Teran Tuxtla Gutierrez, Chiapas.</p>
            <p>&copy; 2020 Derechos reservado <p></p>
      </div>
          <div class="col">
            <p>Contactanos</p>
            <p>telefono: 555-555 <br> Correo: artechiapaneca@gmail.com</p>
    
          </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>  
</body>
</body>
</html>