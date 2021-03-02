<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">

    <script src="index.js"></script>

    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            &nbsp;
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h2>Listado de dependencias</h2>
                    <table id="table_list" class="table table-striped dataTable">
                        <thead>
                            <tr>
                                <th class="text_center">Numero Radicado</th>
                                <th class="text_center">Anexos</th>
                                <th class="text_center">Dependencia</th>
                                <th class="text_center">Usuario</th>
                            </tr>
                        </thead>
                        <tbody id="contenido">
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>


</body>

</html>