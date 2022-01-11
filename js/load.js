// preload //
var loader = document.getElementById("loader");
window.addEventListener("load", function () {
  loader.style.visibility = "hidden";
})
// when the page is ready 
window.onload = function () {
  // text animation Nicolas Schutz 
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
  const fadeUp = document.querySelector('.fade-up')
  const fadeDown = document.querySelector('.fade-down')

  const TL1 = new TimelineMax({
    paused: false
  });
  const TL2 = new TimelineMax({
    paused: false
  });

  TL1
  .from(fadeRight1, 1, {
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

  TL2
    .from(fadeUp, 1.3, {
      opacity: 0,
      y: 200
    })
    .from(fadeDown, 1.3, {
      opacity: 0,
      y: -200
    }, "-=1.3");

  AOS.init(); // aos library 
};
