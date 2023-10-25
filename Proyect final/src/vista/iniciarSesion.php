<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="./login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c9f5871d83.js"crossorigin="anonymous"></script>
    <title>login</title>
<style>
     body{
      background:#E79F61;
      background:linear-gradient()
     }
     .bg{
      background-image:url(https://thejigsawpuzzles.com/img-puzzle-6863396-1024/Mexican-Pottery);
      background-position:center center;
     }
     h2{
      color:#CE3344;
      
     }
  </style>
   
</head>
<body>


<div class ="container w-75 bg-primary mt-5 rounded shadow">
    <div class="row align-items-stretch"> 
      <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6">

      </div>
      <div class="col bg-white p-5 rounded-end">
       <div class="text-end">
        <img src="img/logo.jpeg"width="48"alt="">  
</div>

        
         <h2 class="fw-bold text-center py-5 " ><b>Bienvenido</b></h2>
       
         <form action="Usuario/validarusuario.php"method="POST">
            <div class="mb-4">
                <label for="email"class="form-label">Usuario</label>
                <input type="email"class="form-control"name="correo">
             </div>
             <div class="mb-4">
             <label for="password"class="form-label">Contraseña</label>
                <input type="password"class="form-control"name="password">
                </div>
             <div class="mb-4 form-check">
                <input type="checkbox"name="connected"class="form-check-input">
                <label for="connected"class="form-check-label">contacto</label>
              <div class="d-grid">
                <input type="submit"class="btn btn-danger"value="enviar">
             </div>
             <div class="my-3">
                <span>No tienes cuenta?<a href="usuario/registrarusuario.php">Registrate</a></span>

               
            </form>
           
                    
                    </div>
                </div>
          </div>
     </div> 
</div>
</div>
