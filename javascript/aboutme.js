let quotes = [
    { quote: 'I love to cook! I cook mostly French and Italian food, but I always look for more inspiration. <br> (Cinnamon chip scones, bagels, french toast, and Apple Cider Cake pictured)', 
    image: 'images/about/cooking.png' }, 
    { quote: 'I am a dancer! I used to teach Swing and Blues dancing at college. I have attended many dance conventions around the world and met some truly wonderful people.', 
    image: 'images/about/dancing.png' }, 
    { quote: 'I am a gamer! I love cooperative and creative games especially. From Minecraft to Pokemon, Dungeons & Dragons to Skyrim, and many many more, I have spent countless hours playing with friends.', 
    image: 'images/about/gaming.png' }];

let currentQuote = 0;

let quoteText = document.getElementById('quote-text');
quoteText.innerHTML = quotes[currentQuote].quote;

let quoteImage = document.querySelector('.quote-container img');
quoteImage.src = quotes[currentQuote].image;

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
        quoteText.innerHTML = quotes[currentQuote].quote;
        quoteText.style.opacity = '1';
        quoteImage.src = quotes[currentQuote].image;
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