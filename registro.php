<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de Medidas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>  ">
    <link rel="shortcut icon" href="assets/img/pdvsa-logo-6.png" type="image/x-icon">
    <script src="js/jquery-3.6.4.js" defer></script>
    <script src="js/registro.js" defer></script>
</head>
<body>
<div class="container-fluid dark-bg">
    <header class="d-flex flex-wrap justify-content-center align-content-center py-4 mb-4 border-bottom ">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none px-4">
        <img src="assets/img/pdvsa-logo-6.png" alt="logo pdvsa" class="img-fluid" id="logo">
      </a>

      <ul class="nav px-3 d-flex align-content-center"> 
      <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="tabladePozos.php" class="nav-link">Lista de Datos con Comparación</a></li>
        <li class="nav-item"><a href="registro.php" class="nav-link">Registro de PSI</a></li>
      </ul>
    </header>
  </div>
  <h3 class="text-center py-3">Elija uno de los puntos petróleros:</h3>
  <div class="container d-flex justify-content-center my-3">
      
      <img src="assets/img/mapavenezuela.jpeg" alt="mapa venezuela" width="600px" height="350px" class="img-fluid">

    <img src="assets/img/point.svg" alt="" class="marker" id="p1" width="40px" height="40px" onClick="enviarPozo('p1')" name='1'>
    <img src="assets/img/point.svg" alt="" class="marker" id="p2" width="40px" height="40px" onClick="enviarPozo('p2')" name='2'>
    <img src="assets/img/point.svg" alt="" class="marker" id="p3" width="40px" height="40px" onClick="enviarPozo('p3')" name='3'>

  </div>

  <div class="container py-4 mt-4 d-none" id="form">
            <div class="mb-3 text-center">
                <label for="psi" class="form-label">Medida PSI:</label>
                <input type="number" class="form-control" id="psiInput">
            </div>
            <div class="mb-2 text-center">
            <button type="submit" class="btn btn-primary" id="submit">Añadir</button>
            </div>
    </div>
    <footer class="py-3 my-4 border-top-1">
    <p class="text-center text-bold">© 2023, Made by Autherion</p>
  </footer>
</body>
</html>