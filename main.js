const _d = document;
const _q = (query) => {return _d.querySelector(query);}
const _qs = (query) => {return Array.from(_d.querySelectorAll(query));}

function createButtons(fromArr, toContainer, nameForClass, typeOfElement) {
  var docFrag = _d.createDocumentFragment();
  for (var i=0; i < fromArr.length ; i++){
    let elem = _d.createElement(typeOfElement);
    docFrag.appendChild(elem);
    elem.className = nameForClass;
    elem.innerHTML = i + 1;
  }
  toContainer.appendChild(docFrag);
}

function removeClass(fromArr, string) {
  fromArr.forEach((elem) => elem.classList.remove(string));
};

function nameArrayElements(fromArr, nameForClass) {
  fromArr.forEach(function (element) {
    element.className = nameForClass;
  });
}

function reAdjustContainerWithChildren(ratio, childNodes){
  let children = _qs(childNodes);
  children.forEach(function (element, i) {
    elemWidth = children[i].offsetWidth;
    element.style.height = elemWidth / ratio + "px";
  })
}

function reAdjust(n,num){
  let container = n;
  let element = document.getElementById(container);
  let elemWidth = element.offsetWidth;
  element.style.height = elemWidth / num + "px";
}

const nav = _q('#nav-bar');
const header = _q('#header');
var topOfNav = nav.offsetTop;

function fixNav(){  
  if(window.scrollY >= topOfNav) {
    header.style.paddingBottom = nav.offsetHeight + 25 + 'px';
    document.body.classList.add('fixed-nav');
  } else {
    header.style.paddingBottom = 25 + 'px';
    document.body.classList.remove('fixed-nav');
  }
}

window.addEventListener('scroll', fixNav);