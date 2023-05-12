document.addEventListener('DOMContentLoaded', function() {
  const overlay = document.querySelector('.overlay');
  const currentPage = window.location.pathname.split('/').pop().split('.')[0];
  let navIcon = document.querySelector('.nav-icon');
  let rotated = false;
  let navlinks = ['about', 'portfolio', 'contact'];
  
  if (currentPage !== null && navlinks.includes(currentPage)) {
    document.getElementById(`${currentPage}-link`).classList.add('active');
    document.querySelector(`.headerlinks a[href='${currentPage}.php']`).classList.add('active');
  }

  navIcon.addEventListener('click', function() {
    if (!rotated) {
        navIcon.style.transform = 'rotate(90deg)';
        rotated = true;
    } else {
        navIcon.style.transform = 'rotate(0deg)';
        rotated = false;
    }
    overlay.classList.toggle('show');
  });
});