
window.addEventListener("scroll", function(){
  let deslizableAcademia = this.document.getElementById("deslizableSuperiorAcademia");
  let posicionDeslizableA = deslizableAcademia.getBoundingClientRect(); /* Devuelve el tamanio de un elemento y su posicion relativa respecto a la venta de visualizacion */
  let eje_y = posicionDeslizableA.top;
  let anchoPantalla = window.innerWidth; 
  let altoPantalla = window.innerHeight; 
 /*  console.log(`y: ${eje_y}`); 
  console.log(`alto pantalla: ${altoPantalla}`); */
  let aux; 
  if(eje_y < (altoPantalla/1.25) && (eje_y > 100 )){
    deslizableAcademia.style.transform = `translate(100%,0)`; 
  }else{
    deslizableAcademia.style.transform = "translate(0,0)";
  }
  
  let deslizableIzqWebDesing = this.document.getElementById("left-slider"); 
  let deslizableDerWebDesing =  this.document.getElementById("right-slider"); 
  let ejeY_WD = deslizableIzqWebDesing.getBoundingClientRect().top; 
  console.log (`Eje y WD: ${ejeY_WD}`); 
  if(ejeY_WD < (altoPantalla/1.5) && ejeY_WD > 50){
    deslizableIzqWebDesing.style.transform = `translate(-100%,0)`;
    deslizableDerWebDesing.style.transform = `translate(100%,0)`;
  }else{
    deslizableIzqWebDesing.style.transform = `translate(0%,0)`;
    deslizableDerWebDesing.style.transform = `translate(0%,0)`;
  }
  let deslizableMelodias = this.document.getElementById("deslizableSuperiorMelodias"); 
  let top_Melodias = deslizableMelodias.getBoundingClientRect().top;
  if(top_Melodias < (altoPantalla/1.7) && top_Melodias > 50){
    console.log("apto"); 
    deslizableMelodias.style.transform =`translate(100%,0)`; 
  }else{
    deslizableMelodias.style.transform =`translate(0%,0)`;
  } 
})


