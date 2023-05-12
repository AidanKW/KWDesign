<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WCAG Resource</title>
    <link rel="icon" href="images/AKW_Favicon32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="images/AKW_Favicon48x48.png" sizes="48x48" type="image/png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/wcag.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
        <a href="index.php">KIDDER-WOLFF DESIGN</a>
    </div>

    <div class="header-container">
        <div class="nav-icon">
            <i class="fa fa-bars"></i>
        </div>

        <div class="centered-header">
            <a href="index.php">KIDDER-WOLFF DESIGN</a>
        </div>
    </div>
    <!-- Dropdown Menu -->
    <div class="overlay">
        <ul class="overlay-links">
            <li id="about-link"><a href="about.php">ABOUT</a></li>
            <li id="portfolio-link"><a href="portfolio.php">PORTFOLIO</a></li>
            <li id="contact-link"><a href="contact.php">CONTACT</a></li>
        </ul>
    </div>

    <script src="javascript/header.js"></script>


    <div class="centeredcontainer wcagparagraph">
        <p class="h1">What is this?</p>
        <p class="pgrey">This is a free resource to help others make their websites more accessible. The knowledge on
            this page is based off of the <b>Web Content Accessibility Guidelines (WCAG) 3.0</b>, a resource which
            ironically I have found difficult for others to navigate and read. For each guideline, I will provide a
            little description, as well as any resources which I personally use for that specific topic. At the bottom,
            I include my personal recommendations which are based on research by the Nielsen Norman Group. I hope you
            enjoy! If you have any suggestions, you can contact me through akidderwolff@gmail.com.<br><br>

            Commonly used terms:</p>
        <ul class="pgrey">
            <li><b>WCAG:</b> The Web Content Accessibility Guidelines version 3.0, which can be found at <a
                    href="https://www.w3.org/TR/WCAG20/" target="_blank">wc.org/TR/WCAG20</a>.</li>
            <li><b>Content:</b> Any text, audio, images, video, or anything else your website offers visitors.</li>
            <li><b>AAA: </b> This is terminology by the WCAG to describe the ideal scenario for accessibility.</li>
        </ul>
    </div>

    <div class="container blue" style="padding: 5em 0 5em 0;">
        <div class="circles1"></div>
        <div class="circles2"></div>
        <p class="h1">Chapter 1: Is everything perceivable?</p>
    </div>


    <div class="centeredcontainer">
        <button class="expand-all-button" onclick="toggleGroup(this)">Expand All</button>
        <div class="dropdown-group">
            <!-- WCAG 1.1: Are there text alternatives for any non-text content? -->
            <div class="dropdown">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Are there text alternatives for any non-text content? </p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area">
                        <p class="pgrey">When we include images, videos, icons, and more, we want to make sure people
                            using screen-readers can still enjoy the content. We can do this by giving content
                            alternative text. <br><br>
                            If you're not sure if your images have alt text, try this website: <a
                                href="https://wave.webaim.org/" target="_blank">wave.webaim.org</a>. Just paste your
                            website URL into the search box, and hit [Enter]. Then press "View details", and look for
                            errors or alerts about alternative text.</p>
                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank"
                                href="https://www.w3.org/TR/UNDERSTANDING-WCAG20/text-equiv.html">WCAG
                                1.1 <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WCAG 1.2: Are time-based content given alternatives? -->
            <div class="dropdown">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Are time-based content given alternatives?</p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area pgrey">
                        <p>For audio and videos present on your website, we want to make sure that there's
                            always another
                            way to access this information. This usually takes the form of captions or descriptions for
                            video and audio recordings. Here are some ways to go above an beyond:</p>
                        <ul>
                            <li> Provide an audio track that narrates what's happening in a video. </li>
                            <li> Provide a sign language interpretation for all audio (AAA). </li>
                            <li> Add more than just the dialogue to your audio description, also known as an Extended
                                Audio
                                Description (AAA).</li>
                            <li> For live content (not pre-recorded), provide an alternative such as voice-to-text
                                captions
                                (AAA).
                        </ul>


                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank"
                                href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/media-equiv.html">WCAG
                                1.2 <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WCAG 1.3: Can the website be understood in multiple ways? -->
            <div class="dropdown">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Can the website be understood in multiple ways?</p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area pgrey">
                        <p>Be sure
                            that someone who cannot see and someone who cannot hear can still understand your website.
                            This is especially
                            important when understanding the
                            website involves viewing content in a particular order. This concept also applies when the
                            website relies on shape, size, visual location, orientation, or sound to communicate
                            meaning. <br><br>

                            We also want the website code to be structured so that people not looking or hearing
                            the website can still understand it. If you use a website building service like SquareSpace,
                            you don't have to worry about the code.
                        </p>
                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank"
                                href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/content-structure-separation.html">WCAG
                                1.3 <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WCAG 1.4: Are the colors and sounds distinguishable? -->
            <div class="dropdown last">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Are the text, colors, and sounds distinguishable?</p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area pgrey">
                        <p>Here are the various guidelines for assessing text, color, and sound. </p>
                        <p>Text accessibility guidelines:</p>
                        <ul>
                            <li> We want the website text to maintain functionality up to 200% zoom, with the exceptions
                                being captions and
                                images of text. </li>
                            <li> We prefer the use of actual text over images of text. </li>
                            <li> Ideally, images of text are only decorative or are used when a specific text
                                presentation is essential (AAA). </li>
                        </ul>

                        <p>Color accessibility guidelines:</p>
                        <ul>
                            <li> As a general rule, we do not want to use color as the only visual way to convey
                                information. </li>
                            <li> Also, we want to keep the contrast ratio at least 4.5:1 with the exception of large
                                text, decorative elements, or logos. Large text will suffice with a 3:1 contrast ratio.
                                I personally use this website for checking colors: <a
                                    href="https://accessible-colors.com/" target="_blank">
                                    accessible-colors.com</a>. I like it because it suggests alternatives to use.</p>
                            </li>
                            <li> To go above and beyond, aim for a 7:1 contrast ratio for text, and 4.5:1 ratio for
                                large text (AAA).
                        </ul>

                        <p>Sound accessibility guidelines:</p>
                        <ul>
                            <li> If any audio plays automatically for more than 3 seconds, we provide ways to stop or
                                mute the volume. As a designer however, people generally hate autoplaying sounds so I
                                advice against it. </li>
                            <li> Ideally, background noise in audio should either be 1) non-existent, 2) toggleable, or
                                3) be at least 20 decibels lower than the important content. This does not apply to
                                music, audio logos, or audio CAPTCHAs (AAA).
                        </ul>

                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank"
                                href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast.html">WCAG
                                1.4 <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container blue" style="padding: 5em 0 5em 0;">
        <div class="circles1"></div>
        <div class="circles2"></div>
        <p class="h1">Chapter 2: Is everything operable?</p>
    </div>

    <div class="centeredcontainer">
        <button class="expand-all-button" onclick="toggleGroup(this)">Expand All</button>
        <div class="dropdown-group">
            <!-- WCAG 2.1: Can we only use a keyboard? -->
            <div class="dropdown">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Can someone use the website with only a keyboard?</p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area pgrey">
                        <p> We want the website to be usable from just a keyboard in case a user lacks
                            coordination to use a mouse. The only exception is when the cursor's movement is important,
                            such as a signature. Though it is a good idea to include an alternative whenever
                            possible. Ideally, we want to remove any specific timings for key
                            presses (AAA). <br><br>

                            To see a great example of what this looks like, go to <a href="https://www.microsoft.com/"
                                target="_blank">microsoft.com</a> and use [Tab],
                            [Shift]+[Tab], and [Enter] to navigate the site. Microsoft's website even detects
                            keyboard navigation and offers shortcuts to the main content. </p>
                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank"
                                href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/keyboard-operation.html">WCAG
                                2.1 <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- WCAG 2.2: Is there enough time to understand the website? -->
            <div class="dropdown">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Is there enough time to understand the website?</p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area pgrey">
                        <p> For content that is moving, blinking, scrolling, or auto-updating, we want to make sure that
                            users can pause or stop the movement. For content that has a time limit, we want one of the
                            following to be true:</p>
                        <ul>
                            <li> You can turn off the time limit.</li>
                            <li> You can change the time limit to be at least 10x longer than the default. </li>
                            <li> Give the option to extend the time limit at least 20 seconds before the timer ends. Do
                                this at least 10 times. </li>
                        </ul>
                        <p>If extending the time would invalidate the activity, or if a real-time event is involved,
                            then this guide may be ignored. An example of this is an auction. These rules also don't
                            apply if the time limit is longer than 20 hours.<br><br>
                        </p>

                        <p> To go above and beyond, consider including these options: </p>
                        <ul>
                            <li> Do not have any elements which require timing (AAA).</li>
                            <li> Allow interuptions to be postponed or removed, except in an emergency (AAA). For
                                instance, if you finished buying something online, you do not want to be redirected to
                                the homepage before writing down the shipping information.</li>
                            <li> When an authenticated session expires, allow users to resume exactly where they were
                                after they log in again (AAA). </li>
                        </ul>


                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank"
                                href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/time-limits.html">WCAG
                                2.2 <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- WCAG 2.3: Is the website safe against seizures? -->
            <div class="dropdown">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Is the website safe against seizures?</p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area pgrey">
                        <p> Avoid content that flashes more than 3 times in 1 second, or if the flash is below the flash
                            and red flash thresholds. You can go to <a href="https://trace.umd.edu/peat/"
                                target="_blank">trace.umd.edu/peat/</a> to download the
                            Photosensitive Epilepsy Analysis Tool to test your video.<br><br>

                            As an alternative, simply remove any content that flashses more than 3 times in 1 second
                            (AAA).
                        </p>
                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank"
                                href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/seizure.html">WCAG
                                2.3 <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- WCAG 2.4: Are there enough ways to navigate the website? -->
            <div class="dropdown last">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Are there enough ways to navigate the website?</p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area pgrey">
                        <p> By navigating the website, this means more than navigation menus and search bars. We want to
                            give people the best chance at finding what they are looking for. Here are some ways to help
                            this:
                        </p>

                        <ul>
                            <li> Give pages a title, heading, and labels that describe their purpose. </li>
                            <li> Include multiple ways to locate a web page. </li>
                            <li> Add a focus indicator for keyboard users, and make sure the focus indicator follows a
                                logical path. See "Can someone use the website with only a keyboard" at the beginning of
                                this chapter for an example. </li>
                            <li> Allow users to skip content that is repeated on multiple web pages. For example, do not
                                ask them to log in before reading each page. </li>
                        </ul>
                        <p> Ideally, we would also include the following: </p>
                        <ul>
                            <li> Provide information about where they are in the website. An example of this could be
                                "Home > Store > Shelves" (AAA). </li>
                            <li> Make sure that your links to other pages describe exactly what the link will direct to.
                                For example, <a href="https://www.google.com/" target="_blank">"Go to google"</a> is
                                better than <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"
                                    target="_blank">"Change
                                    your life"</a> (AAA).</li>
                            <li> Within a page, use a heading for each section to organize the content (AAA).</li>
                        </ul>
                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank"
                                href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms.html">WCAG
                                2.4 <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container blue" style="padding: 5em 0 5em 0;">
        <div class="circles1"></div>
        <div class="circles2"></div>
        <p class="h1">Chapter 3: Is everything readable?</p>
    </div>

    <div class="centeredcontainer">
        <button class="expand-all-button" onclick="toggleGroup(this)">Expand All</button>
        <div class="dropdown-group">
            <!-- WCAG 3.1: Is the content understandable? -->
            <div class="dropdown">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Is the content understandable?</p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area pgrey">
                        <p> For people using screen readers, we want the website to say in the code what language the
                            website is using. If you use a website building service like Squarespace, you do not need to
                            worry about the code. Otherwise, you can use this website to test your code: <a
                                href="https://wave.webaim.org/" target="_blank">wave.webaim.org</a>. Just paste your
                            website URL into the search box, and hit [Enter]. Then press "View details", and look for
                            errors or alerts about Language.<br><br>

                            We also want the words in the website to be real so the screen reader
                            does not guess when pronouncing anything.<br><br>

                            Here are some more ways to make your content more understandable:
                        </p>
                        <ul>
                            <li> Add a feature explaning unusual words or phrases, including slang, idioms, and jargon
                                (AAA). </li>
                            <li> Add a way to view the expanded form of any abbreviations (AAA).</li>
                            <li> Keep the content below a lower secondary education level if possible, or provide an
                                alternate version of the content that is below a lower secondary education level (AAA).
                                For this I recommend <a href="https://wave.webaim.org/"
                                    target="_blank">hemingwayapp.com</a> as a free resource for measuring text
                                readability. As an alternative if you have it, Microsoft Word also has excellent
                                readability features.</li>
                        </ul>
                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank"
                                href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/meaning.html">WCAG
                                3.1 <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- WCAG 3.2: Is the website predictable enough? -->
            <div class="dropdown">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Is the website predictable enough?</p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area pgrey">
                        <p> There are some guidelines we should follow to avoid confusing anyone.</p>
                        <ul>
                            <li> Do not initiate any substantial website changes just because someone hovered their
                                mouse over something. This does not include changing the color for a hovered button or
                                something similar.</li>
                            <li> When someone presses a button for fills out a form, only make changes that you have
                                already explained to the person. For example, hitting "Sumbit" on a form should only
                                submit the form, and not also redirect to the home page. </li>
                            <li> Use the same nagivation system on each page.</li>
                            <li> Make similar pages have similar appearances and behaviors. </li>
                            <li> Only make major website changes when a user explicitly requests it, or provide ways to
                                turn off
                                automatic major changes (AAA).</li>
                        </ul>

                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank"
                                href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/consistent-behavior.html">WCAG
                                3.2 <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- WCAG 3.3: Is the website safe against seizures? -->
            <div class="dropdown last">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Does the website help avoid and correct mistakes?</p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area pgrey">
                        <p>Websites should aim to detect errors immediately, as well as provide adequate instructions
                            whenever someone needs to input anything. For example, if someone writes their email instead
                            of a phone number, we want to let them know before they hit submit.

                            We should include at least one of the following: </p>
                        <ul>
                            <li> Offer the ability to reverse any actions made. </li>
                            <li> Allow users to review and confirm their information before submitting. </li>
                            <li> Automatically check for input errors and provide an opportunity to correct them. </li>
                        </ul>
                        <p> Outside the context of legal, financial, and data sensitive transfers, the above points are
                            not absolutely essential, but they are preferred (AAA). Another way to help avoid mistakes
                            is by providing context-specific help (AAA).</p>
                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank"
                                href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/minimize-error.html">WCAG
                                3.3 <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container blue" style="padding: 5em 0 5em 0;">
        <div class="circles1"></div>
        <div class="circles2"></div>
        <p class="h1">Chapter 4: Is the website robust enough for assistive technologies?</p>
    </div>

    <div class="centeredcontainer">
        <button class="expand-all-button" onclick="toggleGroup(this)">Expand All</button>
        <div class="dropdown-group">
            <!-- WCAG 4.1: Is the content understandable? -->
            <div class="dropdown last">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Is the website compatible with current and future people?</p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area pgrey">
                        <p> If you use a website building service like SquareSpace, you do not need to worry about this
                            section.<br><br>

                            In the website code, we want to make sure that there are no typos in the start and end tags.
                            We also want elements nested appropriately, without duplicate attributes, and with unique
                            IDs where appropriate.<br><br>

                            For buttons, forms, links, and any other interface component, we want the name and role to
                            be accessible to a program. We also want these components to be usable by a program.
                        </p>
                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank"
                                href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/ensure-compat.html">WCAG
                                4.1 <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container blue" style="padding: 5em 0 5em 0;">
        <div class="circles1"></div>
        <div class="circles2"></div>
        <p class="h1">My personal recommendations</p>
    </div>

    <div class="centeredcontainer">
        <button class="expand-all-button" onclick="toggleGroup(this)">Expand All</button>
        <div class="dropdown-group">

            <!-- Is the text easy to scan? -->
            <div class="dropdown">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Is the text easy to scan?</p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area pgrey">
                        <p> Most people spent a very short amount of time reading text, so we want to make sure that
                            they find what they are looking for immediately. For each text section on your page, I
                            recommend putting the most important information in the first sentence. If your webpage is
                            lengthy, I also suggest putting a summary at the top. <br><br>

                            Here are some other tips for improving scannability:
                        </p>
                        <ul>
                            <li> Include many headers, bullets, bolding, and white space to break up the wall of text.
                            </li>
                            <li> Use short, recognizable words instead of abbreviations. This includes words like
                                "can't" which should be written as "can not".</li>
                            <li> Avoid repetitive statements like "You will x, you will y, you will z".</li>
                            <li> Type numbers instead of spelling them out. Reading "3" is quicker than reading "three".
                            <li> Aim for a line width that is 35-75 characters long. </li>
                        </ul>
                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank"
                                href="https://www.nngroup.com/articles/concise-scannable-and-objective-how-to-write-for-the-web/">NN/g
                                Article <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="dropdown">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Is the design responsive?</p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area pgrey">
                        <p> A majority of internet browsers use a mobile phone instead of a computer when browsing the
                            internet. Therefore, it is worth it to make the website able to fit smaller screens.<br><br>

                            Here are 3 questions to ask yourself when converting a design to a smaller screen:
                        </p>
                        <ul>
                            <li> What content do you need?</li>
                            <li> What is the priority of content?</li>
                            <li> Does the new interface reflect the content priority?</li>
                        </ul>
                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank"
                                href="https://m3.material.io/foundations/layout/applying-layout/window-size-classes">Microsoft
                                resource about Window sizes <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="dropdown">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Does the website have enough information?</p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area pgrey">
                        <p> It can be a challenge to answer every question that someone might have. So, I highly
                            recommend using this website: <a href="https://answerthepublic.com/"
                                target="_blank">answerthepublic.com</a>. Simply enter your topic, and see what people
                            are asking about the topic. <br><br>

                            For example, I searched "bread" and found that an extremely common question is "can bread be
                            composted".
                        </p>
                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank" href="https://answerthepublic.com/">Answer the public
                                <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="dropdown">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Do the icons have labels?</p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area pgrey">
                        <p>Being overly creative with icons causes confusion. Therefore, it is a good idea to include
                            labels for your icons which describe what the icon represents.
                        </p>
                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank"
                                href="https://www.nngroup.com/articles/icon-usability/">NN/g article about Icon
                                Usability
                                <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="dropdown last">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <i class="fa fa-chevron-right dropdown-icon"></i>
                    <p class="h2 dropdown-text">Can you find the website through the internet?</p>
                </div>
                <div class="dropdown-content">
                    <div class="description-area pgrey">
                        <p> Search Engine Optimization is how we help users find the website in the first place. A basic
                            strategy for this it do pick a keyword or phrase that relates to your topic. Then, use the
                            keyword phrase in each of the following locations: </p>
                        <ul>
                            <li> In the page header </li>
                            <li> In the title tag (metadata) </li>
                            <li> At the beginning of the text on the page, probably in a summary. </li>
                            <li> Dot the phrase throughout the content, including some variations </li>
                            <li> In at least 1 alt tag (metadata) </li>
                            <li> In the URL </li>
                            <li> In the meta description tag (metadata) </li>
                        </ul>
                    </div>
                    <div class="link-checkbox-container">
                        <div class="link-area">
                            <a class="buttonwhite" target="_blank"
                                href="https://support.google.com/webmasters/answer/9128678?hl=en">Google
                                resource about SEO <span>&gt;</span></a>
                        </div>
                        <div class="button-area">
                            <a class="buttonblue" onclick="markAsDone(this)">Mark as done</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="javascript/wcagtool.js"></script>
    <div class="footer" style="height: 10em;">
        <div class="left">
            <p class="greet" style="color:white;"> KIDDER-WOLFF DESIGN </p>
        </div>

        <p style="color: white;"> &copy; 2023 Kidder-Wolff Design
        <p>
    </div>



</body>