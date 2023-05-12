<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KW Walk Over Me</title>
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
        <p class="name">Walk Over Me</p>
    </div>
    <img class="largeimage" src="images/walkoverme/showcase.png" alt="image">
    <div class="projectcontainer">
        <div class="projectsidebyside">
            <div class="left">
                <p class="pgrey">
                    <b>Summary:</b> To spruce up Swedish playgrounds during the winter, I designed, tested, and
                    prototyped light-up tiles!
                    <br><br>
                    <b>Skills: </b>User testing with children, iterative rapid design, bodystorming, microcontrollers.
                    <br><br>
                    <b>Time spent: </b>3 months.
                    <br><br>
                    <b>Budget: </b>1000SEK (~98 USD).
                    <br><br>
                    <b>Team: </b> David Ekman, Iza Grasselli, Annkatrin Jung, Eva-Maria Veitmaa, Aidan Kidder-Wolff
                </p>
            </div>

            <div class="right">
                <img class="smallimage" src="images/walkoverme/building.png" alt="image">
            </div>
        </div>
    </div>

    <img class="largeimage" src="images/walkoverme/prototypes.png" alt="image">

    <div class="projectcontainer">
        <div class="projectsidebyside">
            <div class="paragraph">
                <p class="pgrey">The goal was to attract children and families to playgrounds even in the winter. It’s
                    cold and dark for much of the year in Sweden, and the playgrounds see little use during that time.
                    So I, alongside some wonderful teammates, got to work.

                    Following some mind maps, brainstorming, and ideation, we decided to create a light up floor. This
                    floor aimed to recreate and enhance the experience of whack-a-mole and hopscotch. Using different
                    colors and patterns, we would be able to create endless games! The target users were children,
                    though we wanted to support play-collaboration of all ages. In total, we made 16 high fidelity
                    prototypes for the final product demonstration.
                </p>
            </div>
        </div>
    </div>

    <div class="projectcontainer">
        <div class="projectsidebyside">
            <div class="left">
                <p class="pgrey">
                    Two initial prototype tiles were made out of bed foam, cut plastic, and LED lights attached to an
                    Arduino. Stepping on the tiles would toggle colors between red, green, and blue. From our first
                    round of user testing, we discovered that users enjoyed stepping on tiles more if the tile had some
                    resistance. But, too much resistance led to user’s feeling unbalanced.
                    <br><br>
                    The next prototype had much more bed foam. There were 4 tiles, and the programming was kept simple.
                    Stepping on a tile would cycle between red, green, and blue. These colors slowly faded until the
                    tile was pressed again. Our second round of user testing revealed that simple interactivity was more
                    fun than explicit games because it encouraged creative play.
                    <br><br>
                    After seeing how popular the tiles were, we decided to once again increase the number of tiles to
                    16. Furthermore, we used a lazer cutter in tandem with a 3D printer to make the tiles look as
                    professional as possible given our budget. People of all ages absolutely loved it.
                </p>
            </div>

            <div class="right">
                <img class="smallimage" src="images/walkoverme/presentation.png" alt="image">
            </div>
        </div>
    </div>

    <div class="projectcontainer">
        <div class="projectsidebyside">
            <div class="paragraph">
                <p class="pgrey">Of all the projects I have worked on, this one is my favorite. Nothing felt better than
                    to create something fun, and then to see people adore it. Graduate students were inviting others to
                    help them turn all the tiles green. Children threw tantrums when their parents told them to leave.
                    For the whole presentation, users of many ages played on the tiles. It was marvelous.
                    <br><br>
                    My favorite part of the project was the unexpected wins. For starters, parents complemented our use
                    of bed foam. Without realizing it, we had created a play area where it was safe for children to
                    fall. Nice! Even better, the whole prototype was broken! Sort of.


                    While users played, the tiles would occasionally shine unusual colors. This could affect a few or
                    every tile. There must have been a broken connection somewhere. Users thought this was a feature and
                    *loved* it. Users began trying to figure out the “secret” of our board. So long as I praised users
                    for triggering the secret (and pressed the reset button on the Arduino), users actually enjoyed the
                    tiles more. Our group secretly joked that if anybody figured it out, they should tell us so we can
                    fix it later.
                </p>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
    <script src="" async defer></script>
</body>

</html>