
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitHub - Inscription</title>
    <link rel="stylesheet" href="..\HOME style sheet.css">
    <link rel="stylesheet" href="style sheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
</head>

<body>
<header>
            <a href="Home page.php" class="firstimage"><img src="422910295_1889582714791570_4471416509259206767_n.png"
                    alt="" class="title"></a>
        </header>
        <nav>
            <hr class="navbar-outline">
            <ul class="navbar">
                <li class="first"><a href="..\Home page.php"> HOME </a></li>
                 <?php
                session_start();
                    if (isset($_SESSION['user_id'])) {
                       
                        echo '<li class="nav-li"><a href="..\logout.php"> LOGOUT </a></li>';
                    } else {
                        /*echo"yesss";*/
                        echo '<li class="nav-li"><a href="..\login.php"> LOGIN </a></li>';
                    }
                ?>

                <li class="nav-li"><a href="https://www.google.com/maps/search/ensi/@36.8138887,10.0611841,17z/data=!3m1!4b1?entry=ttu" target="_blank"> LOCATIONS </a></li>
                <li class="nav-li"><a href="classes.php"> CLASSES </a></li>
                <li class="nav-li"><a href="..\diets.php"> DIETS </a></li>
                <li class="nav-li"><a href="..\quick-test.php"> QUICK TEST </a></li>
                <li class="nav-li"><a href="..\blog.php"> BLOG </a></li>
                <li class="nav-li"> <img class="search-icon" src="search icon.png" alt=""></li>
                <li class="nav-li"> <input type="text" placeholder="search" class="search-bar"></li>
            </ul class="navbar">
            <hr class="navbar-outline">
        </nav>
    </div>
    <fieldset class="Plans"><legend class="menu"><label> menu </label></legend><h1 class="select">select what you want to train </h1>
        <a href="bodybuilding.php"> <div class="opt1"><h1>bodybuilding</h1></div></a>
        <div class="opt2"><h1>calisthenics</h1></div><div class="opt3"><h1>crossfit</h1></div>
        <div class="opt1">bodybuilding</div>
      
        </fieldset>
        <footer class="end">
        <div class="endl">
            <a href="..\Home page.php"><img src="422910295_1889582714791570_4471416509259206767_n.png" class="endpic"></a>
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