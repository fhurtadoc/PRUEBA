<?php
include_once('conexion.php');
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'buscar':
            if (isset($_POST['dependencia'])) {
                $dependencia = $_POST['dependencia'];
            }

            $query = "SELECT radi_nume_radi, u.usua_nomb, d.depe_nomb, ax.anex_codigo  FROM radicado r INNER JOIN usuario u ON radi_usua_actu=u.id INNER JOIN dependencia d ON r.depe_codi= d.depe_codi INNER JOIN anexos ax ON r.radi_nume_radi=anex_radi_nume WHERE d.depe_nomb='$dependencia'";
            $result = pg_query($conexion, $query);
            $list = pg_fetch_all($result);
            $jsonstring = json_encode($list);
            echo $jsonstring;
            break;

        case 'list':
            $query = "SELECT radi_nume_radi, u.usua_nomb, d.depe_nomb, ax.anex_codigo  FROM radicado r INNER JOIN usuario u ON radi_usua_actu=u.id INNER JOIN dependencia d ON r.depe_codi= d.depe_codi INNER JOIN anexos ax ON r.radi_nume_radi=anex_radi_nume LIMIT 1000";
            $result = pg_query($conexion, $query);
            $list = pg_fetch_all($result);
            $jsonstring = json_encode($list);
            echo $jsonstring;

            break;

        case 'eliminar':

            break;

        case 'crear':

            break;
    }
}
