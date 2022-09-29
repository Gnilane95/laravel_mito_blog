var slideL = {
  distance: '150%',
  origin: 'left',
  opacity: null
};
var slideR = {
  distance: '150%',
  origin: 'right',
  opacity: null
};


var slideB = {
    distance : "150%",
    origin : "bottom",
    opacity : null,
    scale : 0.7,
    duration: 800,
    // delay : 200,
};

ScrollReveal().reveal('#logo', slideL);
ScrollReveal().reveal('#navBar', slideR);
ScrollReveal().reveal('#containerGrid', slideB);
