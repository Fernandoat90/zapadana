let stocks=document.getElementById("todosLosStocks");
let botomStocks= document.getElementById("botomStocks");
let mostrarCalzadosGeneralesBotom= document.getElementById("mostrarCalzadosGeneralessss");
let calzadosGenerales= document.getElementById("calzadosGenerales");
let tituloCalzadosGenerales= document.getElementById("tituloCalzadosGenerales");

function calzadosGenerales(){
    
        console.log("Nose que pasa");
        calzadosGenerales.style.display="flex";
        if(interruptorCalzadosGenerales){
    
        }
        else{
    
        }
    
}

mostrarCalzadosGeneralesBotom.addEventListener('click',calzadosGenerales);
let interruptorCalzadosGenerales=true;
let interruptor=true;
function verStock(){
    if(interruptor==true){
    stocks.style.display="block";
    interruptor=false;
    botomStocks.innerText="Ocultar Todos Los registros ";
}
    else{
        stocks.style.display="none";
        interruptor=true;
        botomStocks.innerText="Ver todos los registros";
    }
}

botomStocks.addEventListener('click',verStock)