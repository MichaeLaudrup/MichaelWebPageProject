
let paginaActual = window.location.toString(); 

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
      let slider = document.querySelector('.slider');
      let wrapper = document.querySelector('.wrapper');
      let next = document.querySelector('.arrow-next');
      let prev = document.querySelector('.arrow-prev');
      let item = document.querySelectorAll('.item');
      let currdeg  = 0;
      let active = 0;

      next.addEventListener('click', () => {
          slider.classList.toggle('zoom');

          currdeg = currdeg - 120;

          if (active === item.length - 1) {
              active = 0;
          } else {
              active++;
          }

          toggle();
      });

    prev.addEventListener('click', () => {
        slider.classList.toggle('zoom');

        currdeg = currdeg + 120;

        if (active === 0) {
            active = item.length - 1;
        } else {
            active--;
        }

        toggle();
    });

    let toggle = () => {
        setTimeout(() => {
            for (let i = 0; i < item.length; i++) {
                item[i].classList.remove('active');
            }

            item[active].classList.add('active')
            wrapper.style.transform = 'rotateY(' + currdeg + 'deg)';
        }, 900);

        setTimeout(() => {
            slider.classList.toggle('zoom');
        }, 1900);
    }
    
}








