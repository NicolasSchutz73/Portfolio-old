const fadeLeft1 = document.querySelector('.fadeLeft-1')
const fadeLeft2 = document.querySelector('.fadeLeft-2')
const fadeUpCV = document.querySelector('.fadeUp-cv')
const TL3 = new TimelineMax({});
const TL4 = new TimelineMax({});

TL3.from(fadeLeft1, 1.5, {
    opacity: 0,
    x: 100
  }, '+=0.6')
  .from(fadeLeft2, 1.2, {
    opacity: 0,
    x: 100
  }, '-=0.8');

TL4.from(fadeUpCV, 1.2, {
  opacity: 0,
  y: 100
}, '+=2')