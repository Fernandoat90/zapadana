//let botomStocks= document.getElementById("botomStocks");



let mostrarCalzadosGeneralesBotom= document.getElementById("mostrarCalzadosGeneralessss");
let calzadosGenerales= document.getElementById("calzadosGenerales");
let tituloCalzadosGenerales= document.getElementById("tituloCalzadosGenerales");
mostrarCalzadosGeneralesBotom.innerText="Mostrar Calzados";
function calzadosGeneralesFunction(){
    
        console.log("Nose que pasa");
        
        if(interruptorCalzadosGenerales){
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