/******/ (() => { // webpackBootstrap
/*!*********************!*\
  !*** ./src/view.js ***!
  \*********************/
const world = document.getElementById('world');
window.addEventListener('scroll', function () {
  const scrolled = window.scrollY * 0.1;
  world.style.transform = `rotate(${scrolled - 45}deg)`;
});
const worldContainer = document.getElementById('world-container');
worldContainer.addEventListener('click', function () {
  worldContainer.children[0].classList.toggle('showing');
  worldContainer.children[1].classList.toggle('showing');
  worldContainer.children[2].classList.toggle('showing');
});
/******/ })()
;
//# sourceMappingURL=view.js.map