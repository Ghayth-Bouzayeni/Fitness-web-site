<link rel="stylesheet" href="blog.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela Round">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

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
                <li class="nav-li"><a href="blog\blog.php"> BLOG </a></li>
                <li class="nav-li"> <img class="search-icon" src="search icon.png" alt=""></li>
                <li class="nav-li"> <input type="text" placeholder="search" class="search-bar"></li>
            </ul class="navbar">
            <hr class="navbar-outline">
        </nav>
        <form action="write.php" method="post">
            <input type="text" id="blogInput" placeholder="what's on your mind" class="submittext" name="lost">
            <input type="submit"  class="submitbutton" value="Submit">
        </form>
        <div id="blogContainer"></div>

    </div>
</body>