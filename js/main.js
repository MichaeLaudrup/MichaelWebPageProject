
let paginaActual = window.location.toString(); //Se obtiene URL de pagina web actual

function redirigir(recibido){
   const url_inicio = window.location.toString(); 
   window.location = `${url_inicio}${recibido}` ;
}

//Segun la pagina en la que no encontremos ejecutamos un codigo u otro

if(paginaActual.endsWith("index.php")){  //Si la URL de la pagina actual acaba con "index.php" entonces estamos en la pagina de inicio
  const deslizableAcademia = this.document.getElementById("deslizableSuperiorAcademia");
  const deslizableIzqWebDesing = this.document.getElementById("left-slider"); 
  const deslizableDerWebDesing =  this.document.getElementById("right-slider"); 
  const deslizableMelodias = this.document.getElementById("deslizableSuperiorMelodias"); 
  const altoPantalla = window.innerHeight; 

  window.addEventListener("scroll", function(){
    let distanciaTopAcademia = deslizableAcademia.getBoundingClientRect().top;
    let distanciaTopMelodias = deslizableMelodias.getBoundingClientRect().top;
    let distanciaTopWebDesing = deslizableIzqWebDesing.getBoundingClientRect().top; 
    if(distanciaTopAcademia > 100){
      deslizableMelodias.style.transform =`translate(0%,0)`;
      deslizableIzqWebDesing.style.transform = `translate(0%,0)`;
      deslizableDerWebDesing.style.transform = `translate(0%,0)`;
      if ((distanciaTopAcademia < (altoPantalla/1.25)) &&  distanciaTopAcademia > 100 ){
        deslizableAcademia.style.transform = `translate(100%,0)`; 
      }else{
        deslizableAcademia.style.transform = "translate(0,0)";
      }
    }else if(distanciaTopWebDesing > 100){
      deslizableAcademia.style.transform = "translate(0,0)";
      deslizableMelodias.style.transform =`translate(0%,0)`;
      if(distanciaTopWebDesing < (altoPantalla/1.5) && distanciaTopWebDesing > 50){
        deslizableIzqWebDesing.style.transform = `translate(-100%,0)`;
        deslizableDerWebDesing.style.transform = `translate(100%,0)`;
      }
    }else{
      deslizableIzqWebDesing.style.transform = `translate(0%,0)`;
      deslizableDerWebDesing.style.transform = `translate(0%,0)`;
      deslizableAcademia.style.transform = "translate(0,0)";
      if(distanciaTopMelodias < (altoPantalla/1.7) && distanciaTopMelodias > 50){
        deslizableMelodias.style.transform =`translate(100%,0)`; 
      }
    }
  })
}else if(paginaActual.endsWith("webdesingzone")){ //Si la url actual acaba con "webdesingzone" entonces ejecutamos codigo propio de la seccion de desarrollo web
    let alturaNav = this.document.getElementById("menuNavegacion").clientHeight *1.45 ; 
    this.document.getElementById("titleWD").style.marginTop = alturaNav+"px" ;  
    
}








