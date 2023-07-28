let stocks=document.getElementById("todosLosStocks");
let botomStocks= document.getElementById("botomStocks");
botomStocks.innerText="Ver todo el stock";
let interruptor=true;
function verStock(){

    if(interruptor==true){
        
    stocks.style.display="block";
    botomStocks.innerText="Ocultar Todos Los stocks ";
    interruptor=false;
}
    else{
        stocks.style.display="none";
        botomStocks.innerText="Ver todo el stock";
        interruptor=true;
    }
}

botomStocks.addEventListener('click',()=>{
    resetear();
    verStock()
})

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
}