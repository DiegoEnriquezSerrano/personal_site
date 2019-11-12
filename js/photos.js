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