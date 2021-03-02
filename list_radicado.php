<?php
require_once('conexion.php');
$query = "SELECT radi_nume_radi  FROM radicado";
$result = pg_query($conexion, $query);
$list = pg_fetch_array($result);
$jsonstring = json_encode($list);
echo $jsonstring;
