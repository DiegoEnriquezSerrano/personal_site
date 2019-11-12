
const artshow = {
  reg: [
  "https://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.11.23.21.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.02.34.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.02.42.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.03.00.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.09.16.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.11.22.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.13.06.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.13.38.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.19.42.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.24.04.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.31.50.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.12.55.46.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.13.06.43.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.15.Teneriffe.Falls.Trail.13.12.20.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.17.Multhnoma.Falls.10.47.22.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.17.Multhnoma.Falls.10.47.51.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.17.Multhnoma.Falls.10.49.36.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.17.Multhnoma.Falls.10.50.19.jpg",
  "https://lastcalldesigns.com/images/sea-por/2018.04.17.Multhnoma.Falls.11.00.36.jpg"
  ],
  sm: [
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.11.23.21.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.02.34.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.02.42.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.03.00.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.09.16.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.11.22.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.13.06.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.13.38.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.19.42.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.24.04.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.31.50.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.12.55.46.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.13.06.43.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.15.Teneriffe.Falls.Trail.13.12.20.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.17.Multhnoma.Falls.10.47.22.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.17.Multhnoma.Falls.10.47.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.17.Multhnoma.Falls.10.49.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.17.Multhnoma.Falls.10.50.jpg",
    "https://lastcalldesigns.com/images/sea-por/sm/2018.04.17.Multhnoma.Falls.11.00.jpg"
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