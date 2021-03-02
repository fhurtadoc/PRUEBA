$(document).ready(function(){

  $.get("list_radicado.php", function(res, err){
      let listado=JSON.parse(res);      
      for(listado of row){
      let td=
      `<tr taskId="${listado.id}">
            <td>${listado.id}</td>
            <td>${listado.name}</td>
            <td>${listado.name}</td>
            <td>${listado.name}</td>`
      }
      $(table).append(td)
  })  

});
