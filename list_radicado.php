<?php
include_once('conexion.php');
$query= "SELECT radi_nume_radi, u.usua_nomb, d.depe_nomb, ax.anex_codigo  FROM radicado r INNER JOIN usuario u ON radi_usua_actu=u.id INNER JOIN dependencia d ON r.depe_codi= d.depe_codi INNER JOIN anexos ax ON r.radi_nume_radi=anex_radi_nume";
$result=pg_query($conexion, $query);
$list=pg_fetch_assoc($result);
$jsonstring=json_encode($list);
echo $jsonstring;

