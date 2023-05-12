<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KW About</title>
    <link rel="icon" href="images/AKW_Favicon32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="images/AKW_Favicon48x48.png" sizes="48x48" type="image/png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include('header.php'); ?>
    <div class="projectcontainer">
        <div class="projectsidebyside">
            <div class="left">
                <p class="greet">HELLO I'M A <span>UX DESIGNER</span> </p>
                <p class="name"> Aidan <br> Kidder-Wolff </p>
                <p class="pgrey">
                    I am a UX designer in the US looking to make big changes with clever teammates. I adore
                    learning about people, and feel a deep sense of self-satisfaction when my work helps others.
                </p>
            </div>

            <div class="right">
                <img class="smallimage" src="images/about/me.png" alt="image">
            </div>
        </div>
    </div>

    <div class="centeredcontainer">
        <div class="left">
            <p class="h1">What are my values?</p>
        </div>
    </div>

    <div class="projectcontainer">
        <div class="projectsidebyside">
            <div class="paragraph">
                <p class="pgrey"> I am a firm believer that technology should be accessible to everyone, regardless of
                    their
                    abilities or disabilities. As someone who is passionate about inclusivity, I am always looking for
                    ways
                    to
                    make products and experiences more inclusive and accommodating for everyone. Additionally, I believe
                    that
                    the best way to learn and grow is through having fun, and I strive to bring that sense of joy and
                    excitement
                    to everything I do, whether it's designing a website, writing code, or collaborating with a team.
                </p>
            </div>
        </div>
    </div>

    

    <div class="centeredcontainer">
        <p class="h1">What are my goals?</p>

        <div class="grid-container"> <!--Growth, Collaboration, Innovation -->
            <div class="grid-text grid-blue">
                <p class="h1">Growth</p>
                <p>
                    I want to spend each day somewhere I can grow as a designer and where my work benefits as many
                    people as possible.
                </p>
            </div>
            <div class="grid-text">
                <p class="h1">Collaboration</p>
                <p>
                    I want to spend each day somewhere I can grow as a designer and where my work benefits as many
                    people as possible.
                </p>
            </div>
            <div class="grid-text">
                <p class="h1">Innovation</p>
                <p>
                    I want to spend each day somewhere I can grow as a designer and where my work benefits as many
                    people as possible.
                </p>
            </div>
        </div>
    </div>

    <div class="centeredcontainer">
        <p class="h1">Who am I outside of work?</p>
        <div class="quote-container">

            <button id="prev-button"><span>&lt;</span></button>

            <div class="quote">
                <img src="image1.jpg" alt="Image 1">
                <p id="quote-text"></p>
            </div>
            <button id="next-button"><span>&gt;</span></button>
        </div>
        <div class="circles" id="circles-container"></div>

        <script src="javascript/aboutme.js"></script>
    </div>

    <?php include('footer.php'); ?>
    <script src="" async defer></script>
</body>

</html>