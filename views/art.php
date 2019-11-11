
<style type="text/css">
    /*------artShow------*/
    
    #artShow {
      border: 0px solid red;
      display: block;
      height: calc(100vh - 40px);
      background: rgba(35,35,35,1.0); 
    }

    #artShow h1 {
      display: block;
      height: 40px;
      color: var(--sec-font-color);
      text-shadow: var(--sec-text-shadow);
      font-family: Arial;
      font-size: 1.6rem;
      font-weight: 900;
      padding: 5px;
    }
  
    #artGrid {
      border: 0px solid yellow;
      display: grid;
      grid-auto-flow: column;
      grid-template-columns: 30vw 68vw;
      background: rgba(35,35,35,1.0);
      height: calc(100vh - 80px);
    }
  
    .artGridChild {
      border: 0px solid blue;
      max-height: 100%;
      overflow-y: auto;
      max-width: 100%;
    }
  
    #artGridButtonHolder {
      display: grid;
      grid-auto-flow: row;
      grid-template-columns: 31% 31% 31%;
      grid-auto-rows: 100px;
      max-width: 100%;
      width: 100%;
      flex-flow: wrap;
      justify-content: center;
      align-content: stretch; 
      padding: 15px;
      grid-gap: 10px;
    }
  
    .artShowButtons {
      background-size: cover;
      border: 1px solid rgba(0,0,0,1.0);
      box-shadow: 0 0 5px rgba(0,0,0,1.0);
      padding: 5px;
      transition: opacity 0.4s;
    }

    .artShowButtons:hover {
        opacity: 0.7;
    }

    #artDisplayBox {
        display: flex;
        flex-direction: row;
        overflow: hidden;
    }

    .imageBox {
        height: calc(100vh - 40px);
        width: 68vw;
        background-color: transparent;
        position: absolute;
        margin-top: -40px;
        margin-left: 0px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        opacity: 0.0;
        display: block;
        transition: opacity 0.5s;
        transition-delay: 0.2s;
    }

    .imageBox.active {
        opacity: 1.0;
    }
    
    
    /*------/artShow------*/
</style>

<div id="artShow">
  <h1>Art Gallery</h1>
  <div id="artGrid">
    <div class="artGridChild" id="artGridButtonHolder">

    </div>
    <div class="artGridChild" id="artGridDisplayBox">
      
    </div>
  </div><!--artGrid-->
</div><!--artShow-->

<script>
//------START ARTSHOW---------
const artshow = {
  reg: [
  "https://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.11.23.21.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.02.34.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.02.42.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.03.00.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.09.16.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.11.22.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.13.06.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.13.38.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.19.42.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.24.04.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.31.50.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.55.46.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.13.06.43.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.13.12.20.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.17.Multhnoma.Falls.10.47.22.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.17.Multhnoma.Falls.10.47.51.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.17.Multhnoma.Falls.10.49.36.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.17.Multhnoma.Falls.10.50.19.jpg",
  "http://lastcalldesigns.com/images/sea-por/2018.04.17.Multhnoma.Falls.11.00.36.jpg"
  ],
  sm: [
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.11.23.21.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.02.34.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.02.42.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.03.00.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.09.16.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.11.22.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.13.06.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.13.38.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.19.42.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.24.04.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.31.50.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.55.46.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.13.06.43.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.13.12.20.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.17.Multhnoma.Falls.10.47.22.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.17.Multhnoma.Falls.10.47.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.17.Multhnoma.Falls.10.49.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.17.Multhnoma.Falls.10.50.jpg",
    "http://lastcalldesigns.com/images/sea-por/sm/2018.04.17.Multhnoma.Falls.11.00.jpg"
  ]};

var artShow = [];

artShowExp = artshow.reg.forEach(function (elem,index) {
    if(document.body.offsetWidth <= 500) {
      artShow.push(artshow.sm[index]);
    } else if (document.body.offsetWidth > 500) {
      artShow.push(elem);
    }
  });

const artShowButtonsContainer = _d.getElementById("artGridButtonHolder");

createButtons(artShow, artShowButtonsContainer, "artShowButtons", "button");

artShowButtons = Array.from(artShowButtonsContainer.querySelectorAll(".artShowButtons"));

const artGridDisplayBox = _d.getElementById("artGridDisplayBox");

createButtons(artShow, artGridDisplayBox, "imageBox", "div");

const imageBox = Array.from(artGridDisplayBox.querySelectorAll(".imageBox"));

artShow.forEach( function (elem, i) {
  artShowButtons[i].style.backgroundImage = "url(" + elem + ")";
  artShowButtons[i].classList.add(i + 1);
  imageBox[i].style.backgroundImage = "url(" + elem + ")";
  imageBox[i].classList.add(i + 1);
});

function removeActiveImagebox() {
  removeClass(imageBox, 'active');
}

function toggleActiveImage(){
  self = this;
  let heyHo = document.getElementsByClassName(self.classList[1]);
  removeActiveImagebox();
  heyHo[1].classList.toggle('active');
}

artShowButtons.forEach((elem) => elem.addEventListener('mouseover', toggleActiveImage));
artShowButtons.forEach((elem) => elem.addEventListener('click', toggleActiveImage));
artShowButtons.forEach((elem) => elem.addEventListener('mouseout', removeActiveImagebox));
</script>
