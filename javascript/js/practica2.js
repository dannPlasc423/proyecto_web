'use strict'
var pago = true;
var opc = 1;

if(pago==true){
    console.log("Aprobado");

}else{ 
    console.log("No aprobado");
};

switch (opc){
    case 1:
        console.log("Registrar");
        break;
    case 2:
        console.log("Mostrar");
        break;
    case 3:
        console.log("Buscar");
        break;
    default:
        console.log("La opcion no es valida");
        break;
}