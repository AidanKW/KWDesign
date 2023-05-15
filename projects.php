<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KW Portfolio</title>
    <link rel="icon" href="images/AKW_Favicon32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="images/AKW_Favicon48x48.png" sizes="48x48" type="image/png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include('header.php'); ?>
    <div class="centeredcontainer">
        <p class="greet">PORTFOLIO </p>
        <p class="h1">My Recent Work</p>
    </div>

    <a href="(1) ronday.php" class="portfolioitem">
        <div class="container" style="padding-top: 0;">
            <div class="projectsidebyside">
                <div class="left">
                    <p class="greet">DESIGN INTERN AT RONDAY TECHNOLOGIES</p>
                    <p class="pgrey">
                        For my first design job, I worked at the tech startup Ronday Technologies on their
                        online 3D conferencing and hangout platform. As to be expected of startup work, I performed a
                        myriad
                        of tasks both design-related and otherwise.
                    </p>
                </div>

                <div class="right">
                    <img class="smallimage" src="images/ronday/ronday_portfolio.png" alt="image">
                </div>
            </div>
        </div>
    </a>

    <a href="(2) unitedway.php" class="portfolioitem">
        <div class="circles1"></div>
        <div class="circles2"></div>
        <div class="container blue">

            <div class="projectsidebyside">
                <div class="left">
                    <p class="greet">VOLUNTEER WITH UNITED WAY - GUIDE TO WCAG 2.2</p>
                    <p class="pgrey">
                        While I worked at Ronday, I also spend some time working with a nonprofit to update their
                        website. This work involved a 7-page report to help bring the website to AAA compliance.
                        Following the report, I created a free online tool for anyone looking to review their website
                        for accessibility reasons.
                    </p>
                </div>

                <div class="right">
                    <img class="smallimage" src="images/unitedway/unitedwaythumbnail.png" alt="image">
                </div>
            </div>
        </div>
    </a>

    <a href="(3) thesis.php" class="portfolioitem">
        <div class="container">
            <div class="projectsidebyside">
                <div class="left">
                    <p class="greet">MASTERS THESIS IN INTERACTION DESIGN</p>
                    <p class="pgrey">
                        For my master’s thesis, I completed a first-person Somaesthetic design project
                        around the sensation of “rocking”. The final result is a shape-changing pillow called the “Neck
                        Hammock”.
                    </p>
                </div>

                <div class="right">
                    <img class="smallimage" src="images/thesis/thesisthumbnail.png" alt="image">
                </div>
            </div>
        </div>
    </a>

    <a href="(4) walkoverme.php" class="portfolioitem">
        <div class="circles1"></div>
        <div class="circles2"></div>
        <div class="container blue">

            <div class="projectsidebyside">
                <div class="left">
                    <p class="greet">WALK OVER ME - A WINTER PLAYGROUND INSTALLATION</p>
                    <p class="pgrey">
                        To spruce up Swedish playgrounds during the winter, I designed, tested, and
                        prototyped light-up tiles! This was a group project during my master's thesis which took 3
                        months and a budget of 1000SEK (~98 USD).
                    </p>
                </div>

                <div class="right">
                    <img class="smallimage" src="images/walkoverme/walkoverme_portfolio.png" alt="image">
                </div>
            </div>
        </div>
    </a>

    <div class="centeredcontainer">
        <p class="greet">PORTFOLIO </p>
        <p class="h1">Material Explorations</p>

        <div class="grid-container">
            <a href="(a) lightmeup.php" class="grid-item"><img src="images/lightmeup/lightmeupthumbnail.png" alt="Image 1"><span
                    class="text">Light Me Up</span></a>
            <a href="(b) portfolio.php" class="grid-item"><img src="images/portfolio/logothumbnail.png" alt="Image 2"><span
                    class="text">My Portfolio</span></a>
            <!-- <a href="#" class="grid-item"><img src="https://picsum.photos/330/330" alt="Image 3"><span
                    class="text">Somaesthetic Master's Thesis</span></a>
            <a href="#" class="grid-item"><img src="https://picsum.photos/340/340" alt="Image 3"><span
                    class="text">Somaesthetic Master's Thesis</span></a> -->
        </div>
    </div>

    <?php include('footer.php'); ?>
    <script src="" async defer></script>
</body>

</html>