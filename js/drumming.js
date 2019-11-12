const slides = Array.from(_qs("div.mySlides"));

const dotHolder = _d.getElementById("dotHolder");

createButtons(slides, dotHolder, "dot", "button");

const dots = Array.from(_d.getElementsByClassName("dot"));

function assignCurrentSlide(fromArr) {
  fromArr.forEach(function(element, n) {
    let theCurrentSlide = "currentSlide(" + (n + 1) + ")";
    element.setAttribute("onclick", theCurrentSlide);
  });
}

assignCurrentSlide(dots);

const tubes = Array.from(_d.getElementsByTagName("iframe"));

nameArrayElements(tubes, "tube");

var slideIndex = 1;

function showSlides(n) {
  var i;
  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    slides[i].id = slides[i].id.replace("trueTube" , "");
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  slides[slideIndex-1].id += "trueTube";
  dots[slideIndex-1].className += " active";
}
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
  reAdjustFrames();
}

function currentSlide(n) {
  showSlides(slideIndex = n);
  reAdjustFrames();
}

function reAdjustFrames() {
  reAdjustContainerWithChildren(1.77, ".tube");
};

(reAdjustFrames());

window.addEventListener("resize", reAdjustFrames);