$(document).ready(function () {
  $.get("list_radicado.php", function (res, err) {
    let listado = JSON.parse(res);
    console.log(listado);
    let td = "";
    for (let row of listado) {
      td = `<tr>
            <td>${row.radi_nume_radi}</td>
            <td>${row.usua_nomb}</td>
            <td>${row.depe_nomb}</td>
            <td>${row.anex_codigo}</td> </tr>`;

      $("#contenido").append(td);
    }
  });
});
