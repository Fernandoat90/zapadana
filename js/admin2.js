//let botomStocks= document.getElementById("botomStocks");



let mostrarCalzadosGeneralesBotom= document.getElementById("mostrarCalzadosGeneralessss");
let calzadosGenerales= document.getElementById("calzadosGenerales");
let tituloCalzadosGenerales= document.getElementById("tituloCalzadosGenerales");
mostrarCalzadosGeneralesBotom.innerText="Mostrar Calzados";
function calzadosGeneralesFunction(){
    
        
        
        if(interruptorCalzadosGenerales){
            resetear();
            calzadosGenerales.style.display="flex";
            tituloCalzadosGenerales.style.display="block";
            mostrarCalzadosGeneralesBotom.innerText="Esconder Calzados";
            interruptorCalzadosGenerales=false;
        }
        else{
            mostrarCalzadosGeneralesBotom.innerText="Mostrar Calzados";
            calzadosGenerales.style.display="none";
            tituloCalzadosGenerales.style.display="none";
            interruptorCalzadosGenerales=true;
        }
    
}

mostrarCalzadosGeneralesBotom.addEventListener('click',calzadosGeneralesFunction);
let interruptorCalzadosGenerales=true;

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