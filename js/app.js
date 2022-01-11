var textWrapper = document.querySelector(".ml12");

textWrapper.innerHTML = textWrapper.textContent.replace(
  /\S/g,
  "<span class='letter'>$&</span>"
);

anime.timeline().add({
  targets: ".ml12 .letter",
  translateY: [100, 0],
  translateZ: 0,
  opacity: [0, 1],
  easing: "easeOutExpo",
  duration: 2000,
  delay: (el, i) => 500 + 60 * i,
});

// header links fade left 
const fadeRight1 = document.querySelector('.fade-right-1')
const fadeRight2 = document.querySelector('.fade-right-2')
const fadeRight3 = document.querySelector('.fade-right-3')
const TL1 = new TimelineMax({});
const TL2 = new TimelineMax({});

TL1.from(fadeRight1, 0.8, {
    opacity: 0,
    x: -100
  })
  .from(fadeRight2, 0.6, {
    opacity: 0,
    x: -100
  }, '-=0.4')
  .from(fadeRight3, 0.6, {
    opacity: 0,
    x: -100
  }, '-=0.4');


TL2.staggerFrom('.hidden-text', 1.5, {
  y: 100,
  ease: Power4.easeOut
}, 0.15);

