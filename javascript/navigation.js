// JavaScript code to import the header
fetch('header.html')
    .then(response => response.text())
    .then(html => {
        const headerContainer = document.getElementById('header');
        headerContainer.innerHTML = html;

        const overlay = document.querySelector('.overlay');
        const currentPage = window.location.pathname.split('/').pop().split('.')[0];
        let navIcon = document.querySelector('.nav-icon');
        let rotated = false;
        let navlinks = ['about', 'projects', 'contact'];

        if (currentPage !== null && navlinks.includes(currentPage)) {
            document.getElementById(`${currentPage}-link`).classList.add('active');
            document.querySelector(`.headerlinks a[href='${currentPage}.html']`).classList.add('active');
        }

        navIcon.addEventListener('click', function () {
            if (!rotated) {
                navIcon.style.transform = 'rotate(90deg)';
                rotated = true;
            } else {
                navIcon.style.transform = 'rotate(0deg)';
                rotated = false;
            }
            overlay.classList.toggle('show');
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });

// JavaScript code to import HTML content
fetch('footer.html')
    .then(response => response.text())
    .then(html => {
        const container = document.getElementById('footer');
        container.innerHTML = html;
    })
    .catch(error => {
        console.error('Error:', error);
    });
