<?php
    include('datosPozo.php');

    $time = time();
    $nuevo_pozo = array("Pozo" => $_POST['pozo'], "PSI" => $_POST['psi'], 
    "Hora" => date("H:i", $time), "Fecha" => date("d-m-Y", $time));

    array_push($_SESSION['pozos'], $nuevo_pozo);

    echo 'success';

?>