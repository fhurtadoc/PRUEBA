$(document).ready(function () {
  $("#table_list").DataTable();

  getListado();
});

function tableData(data) {
  for (let i = 0; i < data.length; i++) {
    var rowIndex = $(".dataTable")
      .dataTable()
      .fnAddData([
        data[i].radi_nume_radi,
        data[i].anex_codigo,
        data[i].depe_nomb,
        data[i].usua_nomb,
      ]);
  }
}

function getListado() {
  $.post("Controller.php", { action: "list" }, function (res, err) {
    console.log(res);
    let listado = JSON.parse(res);
    let td = "";

    tableData(listado);
  });
}
