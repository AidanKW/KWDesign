// JavaScript code to import the header
fetch('header.html')
    .then(response => response.text())
    .then(html => {
        const headerContainer = document.getElementById('header');
        headerContainer.innerHTML = html;
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
