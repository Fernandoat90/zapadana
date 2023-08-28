let botonSubirStockk= document.getElementById("botonSubirStockk");
let formSubirStock= document.getElementById("formSubirStock");
let contenedorImagenesUrlStock= document.getElementById("contenedorImagenesUrlStock");

formSubirStock.style.display="none";
contenedorImagenesUrlStock.style.display="none";
let interruptor8=true;


botonSubirStockk.addEventListener('click',()=>{
 if(interruptor8==true){

    resetear();


    formSubirStock.style.display="block";
    contenedorImagenesUrlStock.style.display="flex";
    botonSubirStockk.innerText="Ocultar Formulario Stock";
    interruptor8=false;
 }  
 else{
    formSubirStock.style.display="none";
    contenedorImagenesUrlStock.style.display="none";
    botonSubirStockk.innerText="Agregar Stock";
    interruptor8=true;
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