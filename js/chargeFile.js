let testElement= document.getElementById("testElement");

testElement.style.overflow="hidden";
testElement.style.width="150vw";
testElement.style.height="100vh";


window.addEventListener('load',()=>{
    setTimeout(()=>{testElement.style.display="none"},2000);
    
});