let pass=document.getElementById("pass");
let pass2=document.getElementById("pass2");
let email2= document.getElementById("email2");
let email= document.getElementById("email");
let BotomFunction= document.getElementsByClassName("BotomFunction");
let botomRegistrarseVerdadero= document.getElementById("botomRegistrarseVerdadero");


BotomFunction[0].addEventListener('click',(e)=>{
    e.preventDefault();
    email.value=email2.value;
    email2.value="";
    pass.value=pass2.value;
    pass2.value="";
    botomRegistrarseVerdadero.click();
})

