<?php
    session_start();

    if (!isset($_SESSION['pozos'])){
        $_SESSION['pozos'] = array(
            array("Pozo" => "1", "PSI" => 25.2, "Hora" => "18:02", "Fecha" => "18-02-2001"),
            array("Pozo" => "1", "PSI" => 178.2, "Hora" => "8:02", "Fecha" => "15-09-2005"),
            array("Pozo" => "2", "PSI" => 17.3, "Hora" => "12:02", "Fecha" => "5-03-2019"),
            array("Pozo" => "2", "PSI" => 80.3, "Hora" => "13:02", "Fecha" => "5-04-2020"),
            array("Pozo" => "3", "PSI" => 40.4, "Hora" => "15:02", "Fecha" => "18-12-2020"),
            array("Pozo" => "3", "PSI" => 50.4, "Hora" => "11:02", "Fecha" => "24-08-2020"),
        );
    }
    
    function obtenerFechas() {
        return array_unique(array_column($_SESSION['pozos'], "Fecha"));
    }

?>