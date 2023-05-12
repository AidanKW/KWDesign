<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kidder-Wolff Design</title>
    <link rel="icon" href="images/AKW_Favicon32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="images/AKW_Favicon48x48.png" sizes="48x48" type="image/png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include('header.php'); ?>
    <div class="container">
        <div class="left" style='flex: 2;'>
            <p class="greet">HELLO I'M A <span>UX DESIGNER</span> </p>
            <p class="name"> Aidan <br> Kidder-Wolff </p>
            <p class="pgrey"> I am a UX designer in the US looking to make big changes with clever teammates. I adore
                learning about people, and feel a deep sense of self-satisfaction when my work helps others.</p>


            <div class="button-container">
                <a class="buttonblue">HIRE ME</a>
                <a class="buttonwhite" href="#"> DOWNLOAD RESUME <span>&gt;</span></a>
            </div>
        </div>
        <div class="right" style="padding-right: 1em;"><img src="images/Herobanner.png" alt="image"></div>
    </div>
    <div class="container blue" style="padding: 5em 0 5em 0;">
        <div class="circles1"></div>
        <div class="circles2"></div>
        <div class="left">
            <p class="greet">ABOUT ME </p>
            <p class="h1">Usability, <br>Accessibility, <br>& Inclusion </p>
            <p class="pgrey">
                I have a keen interest in innovative physical products. Through my computer science background, I am
                well aware of how amazingly powerful technology can be. If I can make a product for someone that they
                never thought possible, imagine the joy they will have! I hope to show people technology that is helpful
                and/or fun, not stressful and confusing.
            </p>

            <a href="#"> LEARN MORE <span>&gt;</span></a>
        </div>

        <div class="right">
            <p class="h1">Contact</p>
            <p class="pgrey">If I’m a good fit for your workplace, or if you have any questions,
                I’m always happy to chat! The best way to reach me is through email at </p>
            <p><b style='color:white;'>akidderwolff@gmail.com</b></p>
            <div class="social-links">
                <a href="mailto:your-email@gmail.com" class="fa fa-envelope"></a>
                <a href="https://www.linkedin.com/in/your-profile" class="fa fa-linkedin"></a>
                <a href="https://github.com/your-profile" class="fa fa-github"></a>
            </div>
        </div>
    </div>

    <div class="centeredcontainer">
        <p class="greet">PORTFOLIO </p>
        <p class="h1">My recent work</p>

        <div class="grid-container">
            <a href="(1) ronday.php" class="grid-item"><img src="images/ronday/rondaythumbnail.png" alt="Image 1"><span
                    class="text">Ronday Technologies</span></a>
            <a href="(2) unitedway.php" class="grid-item"><img src="images/unitedway/unitedwaythumbnail.png" alt="Image 2"><span
                    class="text">Visual Guide to WCAG</span></a>
            <a href="(3) thesis.php" class="grid-item"><img src="images/thesis/thesisthumbnail.png" alt="Image 3"><span
                    class="text">Somaesthetic Master's Thesis</span></a>
            <a href="(4) walkoverme.php" class="grid-item fourth"><img src="images/walkoverme/walkovermethumbnail.png" alt="Image 3"><span
                    class="text">Walk Over Me</span></a>
        </div>
    </div>

    <div class="centeredcontainer">
        <p class="greet">QUOTES</p>
        <p class="h1">What people are saying</p>


        <div class="quote-container">
            <button id="prev-button"><span>&lt;</span></button>
            <div class="quote">
                <p id="quote-text"></p>
            </div>
            <button id="next-button"><span>&gt;</span></button>
        </div>
        <div class="circles" id="circles-container"></div>

        <script src="javascript/quotes.js"></script>
    </div>
    <?php include('footer.php'); ?>
    <script src="" async defer></script>
</body>

</html>