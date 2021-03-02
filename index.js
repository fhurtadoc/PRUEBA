$(document).ready(function () {
  $(document).ready(function () {
    $("#table_list").DataTable();
  });
  getListado();
});

function tableData(data) {
  $(".dataTable").dataTable().fnClearTable();

  for (let i = 0; i < data.length; i++) {
    var rowIndex = $(".dataTable")
      .dataTable()
      .fnAddData([
        data[i].radi_nume_radi,
        data[i].usua_nomb,
        data[i].depe_nomb,
        data[i].anex_codigo,
      ]);
  }
}

function getListado() {
  $.get("list_radicado.php", function (res, err) {
    let listado = JSON.parse(res);
    let td = "";

    tableData(listado);
  });
}
