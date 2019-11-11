
<style type="text/css">
/*------Gallery------*/
    .panels {
      height: calc(100vw / 2.33);
      max-width: 100%;
      overflow: hidden;
      box-shadow: 0px 0px 15px rgba(0,0,0,0.7), inset 0 0 0 1px rgba(255,255,255,0.2);
      z-index: 8;
      background: rgba(50,50,50,1.0);
      display: flex;
      margin-top: 15px;
    }
    
    .panel {
      box-shadow:inset 0 0 0 1px rgba(255,255,255,0.1);
      color:white;
      text-align: center;
      /* Safari transitionend event.propertyName === flex */
      /* Chrome + FF transitionend event.propertyName === flex-grow */
      transition:
        font-size 0.7s cubic-bezier(0.61,-0.19, 0.7,-0.11),
        flex 0.7s cubic-bezier(0.61,-0.19, 0.7,-0.11),
        background 0.2s,
        opacity 0.2s;
      font-size: 1em;
      background-size:cover;
      background-position:center;
      flex: 1;
      justify-content: center;
      align-items: center;
      display: flex;
      flex-direction: column;
      opacity: 0.5;
      overflow: hidden;
      width: 100%;
    }
    
    .panel:hover {
      opacity: 0.7;
    }
    
    .panel > * {
      margin: 0;
      width: 100%;
      transition: transform 0.5s;
      flex: 1 0 auto;
      display: flex;
      justify-content: left;
      align-items: flex-end;
    }
    
    .panel > *:last-child { 
      transform: translateY(100%);
    }
    
    .panel.open-active > *:first-child { 
      transform: translateY(0%);
    }
    
    
    .panel.open-active {
      opacity: 1.0;
      z-index: 6;
      box-shadow: 0 0 15px rgba(0,0,0,1.0);
    }
    
    .panel p {
      text-transform: none;
      font-family: nativeFont_01;
      font-weight: normal;
      text-shadow:0 0 4px rgba(2, 2, 2, 1.0), 0 0 14px rgba(2, 2, 2, 1.0), 0 0 1px rgb(0,0,0);;
      font-size: 1em;
    }
    
    .panel p span {
      background-color: rgba(25,25,25,0.5);
      padding: 0px 5px 5px 5px;
      border-radius: 0 5px 0 0;
      box-shadow: 0 0 5px rgb(0,0,0);
      text-align: left;
      max-width: 66%;
    }
    
    .panel.open {
      font-size:1.0em;
      flex: 6;
    }

    @media (max-width: 450px) {
      .panel1 { 
        background-image:url(http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.11.23.21.jpg); 
      }
      .panel2 { 
        background-image:url(http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.09.16.jpg); 
      }
      .panel3 { 
        background-image:url(http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.11.22.jpg); 
      }
      .panel4 { 
        background-image:url(http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.24.04.jpg); 
      }
      .panel5 { 
        background-image:url(http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.31.50.jpg); 
      }
      .panel6 { 
        background-image:url(http://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.11.23.21.jpg); 
      }    
    }

    @media (min-width: 451px) {
      .panel1 { 
        background-image:url(http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.11.23.21.jpg); 
      }
      .panel2 { 
        background-image:url(http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.09.16.jpg); 
      }
      .panel3 { 
        background-image:url(http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.11.22.jpg); 
      }
      .panel4 { 
        background-image:url(http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.24.04.jpg); 
      }
      .panel5 { 
        background-image:url(http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.31.50.jpg); 
      }
      .panel6 { 
        background-image:url(http://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.11.23.21.jpg); 
      }
    }
    /*------/Gallery------*/
</style>

<!--The Gallery-->
<div>
  <span class="navLink">Photo album</span>
</div>
<div class="panels" id="gallery">
  <div class="panel panel1">
    <p><span>Tenneriffe Falls Trail <br>2018 / 04 / 15 <br>11:23 am</span></p>
  </div>
  <div class="panel panel2">
    <p><span>Tenneriffe Falls Trail <br>2018 / 04 / 15 <br>12:09 pm</span></p>
  </div>
  <div class="panel panel3">
    <p><span>Tenneriffe Falls Trail <br>2018 / 04 / 15 <br>12:11 pm</span></p>
  </div>
  <div class="panel panel4">
    <p><span>Tenneriffe Falls Trail <br>2018 / 04 / 15 <br>12:24 pm</span></p>
  </div>
  <div class="panel panel5">
    <p><span>Tenneriffe Falls Trail <br>2018 / 04 / 15 <br>12:21 pm</span></p>
  </div>
  <div class="panel panel6">
    <p><span>Tenneriffe Falls Trail <br>2018 / 04 / 15 <br>12:21 pm</span></p>
  </div>
</div>
<!--/The Gallery-->

<script>
//-----------START GALLERY-------------
function toggleOpen(){
  self = this;
  siblings = Array.from(self.parentElement.children);
  if (self.className.includes('open')) {
    self.classList.remove('open');
  } else {
    siblings.forEach(sibling => sibling.classList.remove('open'));
    self.classList.add('open');
  }
}

function toggleActive(event){
  self = this;
  if(event.propertyName.includes('flex') && (self.className.includes('open' || 'open-active'))) {
    self.classList.toggle('open-active');
  }
}

const panels = Array.from(_qs('.panel'));

panels.forEach(elem => elem.addEventListener('click', toggleOpen));
panels.forEach(elem => elem.addEventListener('transitionend', toggleActive));

const flexGallery = document.getElementById("gallery");

function reAdjustContainer(){
  reAdjust("gallery", 2.33)
};

//-----------END GALLERY-------------
</script>
