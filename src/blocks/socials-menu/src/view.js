const world = document.getElementById('world')
window.addEventListener('scroll', function () {
  const scrolled = window.scrollY * 0.1;
  world.style.transform = `rotate(${scrolled - 45}deg)`;
})