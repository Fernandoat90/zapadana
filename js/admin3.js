let agregarCalzadosGeneralesssBoton = document.getElementById("agregarCalzadosGeneralesssBoton");
let agregarCalzadosGeneralesss = document.getElementById("agregarCalzadosGeneralesss");

agregarCalzadosGeneralesss.style.display="none";

let interruptor6=true;


agregarCalzadosGeneralesssBoton.addEventListener('click',()=>{
 if(interruptor6==true){
    resetear();
    agregarCalzadosGeneralesss.style.display="block";
    agregarCalzadosGeneralesssBoton.innerText="Ocultar Formulario Calzados";
    interruptor6=false;
 }  
 else{
    agregarCalzadosGeneralesss.style.display="none";
    agregarCalzadosGeneralesssBoton.innerText="Agregar Calzados";
    interruptor6=true;
 } 
});
function resetear(){
    stocks.style.display="none";
    botomStocks.innerText="Ver todos los registros";
    mostrarCalzadosGeneralesBotom.innerText="Mostrar Calzados";
    calzadosGenerales.style.display="none";
    tituloCalzadosGenerales.style.display="none";
    agregarCalzadosGeneralesss.style.display="none";
    agregarCalzadosGeneralesssBoton.innerText="Agregar Calzados";
    formSubirStock.style.display="none";
    botonSubirStockk.innerText="Agregar Stock";
    contenedorImagenesUrlStock.style.display="none";
}