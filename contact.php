<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KW Contact</title>
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
        <div class="projectsidebyside" style="align-items: start;">
            <div class="left">
                <p class="greet">COME AND <span>SAY HI</span></p>
                <p class="name"> Contact me </p>
                <p class="pgrey">
                    You can reach out to me using my email, linkedin, or by filling out the form. Thank you for
                    taking the time to check out my work! <br><br><b>akidderwolff@gmail.com</b><br>
                </p>
                <div class="social-links">
                    <a href="mailto:akidderwolff@gmail.com" class="fa fa-envelope"></a>
                    <a href="https://www.linkedin.com/in/your-profile" class="fa fa-linkedin"></a>
                    <a href="https://github.com/your-profile" class="fa fa-github"></a>
                </div>
            </div>

            <div class="right" style="">
                <form name="contact" method="POST" data-netlify="true">
                    <p>
                        <label>
                            <span class="label-text">Name: </span>
                            <input type="text" name="name" />
                        </label>
                    </p>
                    <p>
                        <label>
                            <span class="label-text">Email: </span>
                            <input type="email" name="email" />
                        </label>
                    </p>
                    <p>
                        <label>
                            <span class="label-text">Message: </span>
                            <textarea name="message"></textarea>
                        </label>
                    </p>
                    <p>
                        <button type="submit">Send</button>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <div class="projectcontainer">

    </div>

    <?php include('footer.php'); ?>
    <script src="" async defer></script>
</body>

</html>