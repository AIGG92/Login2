var formulario = document.getElementById("idForm");
var formulario2 = document.forms["idForm"];
var formularo3 = document.getElementsByTagName("idForm")[0];
var foemulario4 = document.forms[0];

function ValidarUsuario(){
  var elemento = document.getElementById("idUsuario").values;
  if(elemento.values == ""){
    alert("Campo Vacio");
    return false;
  }
  return true;
}
