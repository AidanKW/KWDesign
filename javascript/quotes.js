let quotes = [
    '"As a team member, Aidan was thoughtful, friendly, hardworking, conscientious, and enthusiastic about helping wherever he was needed. I would look forward to working with Aidan again in the future if our paths cross again." <br><em>- Tim Train, CEO & Co-founder of Ronday Technologies</em>',
    '“He was a valuable team member, always willing to learn, help others, and had a positive attitude. Overall, Aidan was an asset to our team, and I highly recommend him for any future position.” <br><em>― Mahdi Farra, Director of Product & Design at Ronday Technologies</em>',
    '"I know him the best of anyone I think. <br>And I will say for certain that he is great at using 3rd person." <br><em>- Aidan Kidder-Wolff, UX Designer</em>'
];
let currentQuote = 0;

let quoteText = document.getElementById('quote-text');
quoteText.innerHTML = quotes[currentQuote];

let circlesContainer = document.getElementById('circles-container');
for (let i = 0; i < quotes.length; i++) {
    let circle = document.createElement('span');
    circle.classList.add('circle');
    if (i === currentQuote) {
        circle.classList.add('active');
    }
    circle.addEventListener('click', () => {
        currentQuote = i;
        updateQuote();
        updateCircles();
    });
    circlesContainer.appendChild(circle);
}

document.getElementById('prev-button').addEventListener('click', () => {
    currentQuote--;
    if (currentQuote < 0) {
        currentQuote = quotes.length - 1;
    }
    updateQuote();
    updateCircles();
});

document.getElementById('next-button').addEventListener('click', () => {
    currentQuote++;
    if (currentQuote >= quotes.length) {
        currentQuote = 0;
    }
    updateQuote();
    updateCircles();
});

function updateQuote() {
    quoteText.style.opacity = '0';
    setTimeout(() => {
        quoteText.innerHTML = quotes[currentQuote];
        quoteText.style.opacity = '1';
    }, 150);
}

function updateCircles() {
    let circles = document.querySelectorAll('.circle');
    for (let i = 0; i < circles.length; i++) {
        if (i === currentQuote) {
            circles[i].classList.add('active');
        } else {
            circles[i].classList.remove('active');
        }
    }
}