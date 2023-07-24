let stocks=document.getElementById("todosLosStocks");
let botomStocks= document.getElementById("botomStocks");

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