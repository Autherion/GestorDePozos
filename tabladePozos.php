<?php
    include('php/datosPozo.php');

    $fechas_unicas;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medidas Tomadas - PSI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="shortcut icon" href="assets/img/pdvsa-logo-6.png" type="image/x-icon">
    <script src="js/jquery-3.6.4.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js" ></script>
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
    </header>
  </div>

    <h2 class="text-center pt-3 my-3">Registro General: </h2>
  <div class="container my-4 py-3">
  <table class="table  table-dark table-striped table-hover text-centerx`">
  <thead>
    <tr>
      <th scope="col">Pozo</th>
      <th scope="col">Medición PSI</th>
      <th scope="col">Hora de Registro</th>
      <th scope="col">Fecha de Registro</th>
    </tr>
  </thead>
    <tbody class="tbody">
    <?php foreach ($_SESSION['pozos'] as $row): array_map('htmlentities', $row); ?>
        <tr>
        <td><?php echo implode('</td><td>', $row); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
  </tbody>
</table>
</div>

<h2 class="text-center mb-3">Realizar Grafica</h2>

<div class="container">
    <select class="form-select mt-4" id="opcion1">
        <option selected="selected">-</option>
        <?php
        
        $fechas_unicas = obtenerFechas();
        
        // Iterating through the product array
        foreach($fechas_unicas as $item){
            echo "<option value='strtolower($item)'>$item</option>";
        }
        ?>
    </select>
    <select class="form-select mt-4" id="opcion2">
        <option selected="selected">-</option>
        <?php
        
        $fechas_unicas = obtenerFechas();
        
        // Iterating through the product array
        foreach($fechas_unicas as $item){
            echo "<option value='strtolower($item)'>$item</option>";
        }
        ?>
    </select>
</div>

<div class="container mt-4 mb-4 text-center">
      <button id="graficaBtn" class="btn btn-primary">Realizar Grafica</button>
  </div>

<div class="container d-flex d-none justify-content-center align-content-center" id="canvas-container">
  <canvas id="myChart"></canvas>
</div>

<footer class="py-3 my-4">
    <p class="text-center text-bold">© 2023, Made by Autherion</p>
  </footer>

<script>
let graficaButton = document.getElementById('graficaBtn').addEventListener("click", () =>{
      var opcion1 = document.getElementById("opcion1");
    var valor = opcion1.value;
    var texto = opcion1.options[opcion1.selectedIndex].text;

    var opcion2 = document.getElementById("opcion2");
    var valor2 = opcion2.value;
    var texto2 = opcion2.options[opcion2.selectedIndex].text;



    const ctx = document.getElementById('myChart');
    $("#canvas-container").removeClass('d-none');
    ctx.scrollIntoView({behavior: "smooth"});
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [texto, texto2],
        datasets: [{
          label: 'Comparación PSI entre años',
          data: [5, 10],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  })

</script>

</body>
</html>