

<link rel="stylesheet" href="HOME style sheet.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela Round">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitHub</title>
</head>

<body>
    <div id="part1">
        <header>
            <a href="Home page.php" class="firstimage"><img src="422910295_1889582714791570_4471416509259206767_n.png"
                    alt="" class="title"></a>
        </header>
        <nav>
            <hr class="navbar-outline">
            <ul class="navbar">
                <li class="first"><a href="Home page.php"> HOME </a></li>
                 <?php
                session_start();
                    if (isset($_SESSION['user_id'])) {
                       
                        echo '<li class="nav-li"><a href="logout.php"> LOGOUT </a></li>';
                    } else {
                        /*echo"yesss";*/
                        echo '<li class="nav-li"><a href="login.php"> LOGIN </a></li>';
                    }
                ?>

                <li class="nav-li"><a href="https://www.google.com/maps/search/ensi/@36.8138887,10.0611841,17z/data=!3m1!4b1?entry=ttu" target="_blank"> LOCATIONS </a></li>
                <li class="nav-li"><a href="classes\classes.php"> CLASSES </a></li>
                <li class="nav-li"><a href="diets.php"> DIETS </a></li>
                <li class="nav-li"><a href="quick-test.php"> QUICK TEST </a></li>
                <li class="nav-li"><a href="blog.php"> BLOG </a></li>
                <li class="nav-li"> <img class="search-icon" src="search icon.png" alt=""></li>
                <li class="nav-li"> <input type="text" placeholder="search" class="search-bar"></li>
            </ul class="navbar">
            <hr class="navbar-outline">
        </nav>
        <p class="front-text">Unlock your fitness potential at Sweat. Explore diverse classes, top-notch facilities, and
            a
            supportive community for a healthier you.</p>
        <hr class="separation">
    </div>
    <div class="articlscontainer">
        <div class="prearticls">
            <p class="first-text"> FITHUB IS FOR YOU </p>
            <a href="#" class="viewmore"> view more &rarr;</a>
        </div>
        <div class="articls">
            <div class="article1">
                <img src="article1image.jpg" alt="" class="article1image">
                <p class="articletext"><b>A FATHER'S PROMISE: LOSING 84 POUNDS TO RUN WITH HIS KIDS</b></p>
                <p class="articledescription">“Walking is easier, climbing the stairs, running after the kids—all of
                    these things are just so much
                    easier.”</p>

            </div>
            <div class="article1">
                <img src="article2image.jpg" alt="" class="article2image">
                <p class="articletext"><b>GO BEYOND THE PHYSICAL: DEVELOPING GRIT & MENTAL STRENGTH</b></p>
                <p class="articledescription">“Practicing a physical thing that’s difficult helps develop mental
                    toughness for when something doesn’t go right in life.”</p>
            </div>
            <div class="article1">
                <img src="article3image.jpg" alt="" class="article3image">
                <p class="articletext"><b>A SENSE OF BELONGING: A COMMUNITY THAT WILLS YOU TO HIT YOUR GOALS</b></p>
                <p class="articledescription">“There’s something binding about struggling together. We support each
                    other and we do a lot of things together.”</p>
            </div>
        </div>
    </div>
    <p class="welcome-text">Welcome to <span class="FitHub"> FitHub! </span>Get ready to embark on your journey to a
        healthier, stronger you.</p>
    <div class="video_block">
        <p class="video_text">take a look at this introvideo that briefly talkes about our &rarr; comunity and our
            ambition </p>
        <video src="introvideo.mp4" class="video" autoplay controls></video>
    </div>
    <div class="options">
        <p class="options-header">GET AHEAD OF THE COMPETITION</p>
        <ul class="ahead-list">
            <li class="ahead-list-item">
                <div class="ahead-list-image">
                    <img src="https://everfit.io/wp-content/themes/everfit/assets/images/branding/ahead-sub1.svg"
                        alt="">
                </div>
                <h3 class="ahead-list-ttl">Represent Your Brand Identity</h3>
                <p class="ahead-list-item-text">Showcase your logo and custom color scheme throughout the training app
                    to reinforce your brand every
                    time
                    a client logs on.</p>

            </li>
            <li class="ahead-list-item">
                <div class="ahead-list-image">
                    <img src="https://everfit.io/wp-content/themes/everfit/assets/images/branding/ahead-sub2.svg"
                        alt="">
                </div>
                <h3 class="ahead-list-ttl">Personalize the Experience</h3>
                <p class="ahead-list-item-text">Personalize your welcome video, workouts, and in-app branding to offer a
                    unique training experience
                    for
                    your clients.</p>

            </li>
            <li class="ahead-list-item">
                <div class="ahead-list-image">
                    <img src="https://everfit.io/wp-content/themes/everfit/assets/images/branding/ahead-sub3.svg"
                        alt="">
                </div>
                <h3 class="ahead-list-ttl">Stand out from the crowd</h3>
                <p class="ahead-list-item-text">Show clients why they should choose you. A custom fitness app helps
                    differentiate your brand from
                    competitors while reaching even more users.</p>

            </li>
            <li class="ahead-list-item">
                <div class="ahead-list-image">
                    <img src="https://everfit.io/wp-content/themes/everfit/assets/images/branding/ahead-sub4.svg"
                        alt="">
                </div>
                <h3 class="ahead-list-ttl">Grow Brand Recognition</h3>
                <p class="ahead-list-item-text">Present a consistent brand identity that resonates with your clients and
                    builds trust by utilizing a
                    custom fitness app.</p>

            </li>
            <li class="ahead-list-item">
                <div class="ahead-list-image">
                    <img src="https://everfit.io/wp-content/themes/everfit/assets/images/branding/ahead-sub5.svg"
                        alt="">
                </div>
                <h3 class="ahead-list-ttl">Improve Customer Retention</h3>
                <p class="ahead-list-item-text">Build loyalty with cohesive branding that will keep clients engaged and
                    working out with you longer.
                </p>

            </li>
            <li class="ahead-list-item">
                <div class="ahead-list-image">
                    <img src="https://everfit.io/wp-content/themes/everfit/assets/images/branding/ahead-sub6.svg"
                        alt="">
                </div>
                <h3 class="ahead-list-ttl">Increase Revenue</h3>
                <p class="ahead-list-item-text">Go from a business to a brand with a custom fitness app that highlights
                    your unique niche and
                    positions
                    you for even more growth!</p>

            </li>
        </ul>
    </div>
    <footer class="end">
        <div class="endl">
            <a href="Home page.php"><img src="422910295_1889582714791570_4471416509259206767_n.png" class="endpic"></a>
            <p class="copy">
                © 2024 The Limit

                All Rights Reserved</p>
        </div>
        <div class="endm">
            <div class="endmpic">
                <a href="https://www.facebook.com" target="_blank"><img src="facebook logo.png" class="endpics"></a>
                <a href="https://www.instagram.com" target="_blank"><img src="instagram logo.png" class="endpics"></a>
                <a href="https://www.tiktok.com" target="_blank"><img src="tiktok logo.png" class="endpics"></a>
            </div>
            <p class="endpar">contact us on facebook, instagram or tiktok</p>
        </div>
        <div>

        </div>
    </footer>
</body>

</html>