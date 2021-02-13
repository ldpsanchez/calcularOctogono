<?php
    // Acceso al servidor
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    header('content-type: application/json; charset=utf-8');

    // Obteniendo la data del frontend
    $data = json_decode(file_get_contents("php://input"), true);
    $lado = $data["lado"];
    $apotema = $data["apotema"];

    /* $lado = 2.3;
    $anguloInterior = 6;
    $area = $lado / 2 * tan($anguloInterior / 2);
    $apotema = 2.78; */

    $areaDeOctogono = 4 * $lado * $apotema;
    // $areaDeOctogonoRound = round($areaDeOctogono, 2, PHP_ROUND_HALF_UP)

    echo "$areaDeOctogono";

?>