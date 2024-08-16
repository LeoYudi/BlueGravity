const posts = document.getElementsByClassName('post-container');

for (const post of posts) {
  post.addEventListener('click', function (e) {
    e.preventDefault();
    const hiddenText = post.children[2];
    hiddenText.classList.toggle('hidden')
  })
}