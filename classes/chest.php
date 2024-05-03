
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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

   <div class="CHEST"><div class="chest-img" ><img class=img src="https://cdn.shopify.com/s/files/1/1585/6091/files/Incline-Dumbell_7523afc6-1f9d-49d5-83cd-d03f6f93e09d_large.jpg?v=1594061736"><h4>4 set</h4><h4>8-12 rep</h4></div>
    <div class="chest-img" ><img class="img" src="https://cdn.shopify.com/s/files/1/1633/7705/files/cable_machine_upper_chest_480x480.jpg?v=1635471975"><h4>4 set</h4><h4>8-12 rep</h4></div>
    <div class="chest-img" ><img class="img" src="https://www.bosshunting.com.au/cdn-cgi/imagedelivery/izM8XxyLg9MD6py1ribxJw/www.bosshunting.com.au/2022/09/Weighted-Svend-Press-Warm-Up.png/w=9999"><h4>4 set</h4><h4>8-12 rep</h4></div>
    <div class="chest-img" ><img class="img" src="https://cdn.shopify.com/s/files/1/1633/7705/files/dumbbell_chest_exercises_480x480.jpg?v=1626090765"><h4>4 set</h4><h4>8-12 rep</h4></div>
    <div class="chest-img" ><img class="img" src="https://i.pinimg.com/564x/b8/7f/b8/b87fb8e0861705a5bf584b151c69a1c1.jpg"><h4>4 set</h4><h4>8-12 rep</h4></div>
    <div class="chest-img" ><img class="img" src="https://cdn.shopify.com/s/files/1/1633/7705/files/how_to_do_dumbbell_chest_exercises_without_a_bench_480x480.jpg?v=1626713251"><h4>4 set</h4><h4>8-12 rep</h4></div>
    <div class="chest-img" ><img class="img" src="https://cdn.shopify.com/s/files/1/1633/7705/files/dumbbell_chest_exercises_without_a_bench_480x480.jpg"><h4>4 set</h4><h4>8-12 rep</h4></div>
    <div class="chest-img" ><img class="img" src="https://i.pinimg.com/564x/b5/ae/e9/b5aee9e545ac8409db4fb690ae3ce01f.jpg"><h4>4 set</h4><h4>8-12 rep</h4></div>
    <div class="chest-img" ><img class="img" src="https://cdn.shopify.com/s/files/1/1585/6091/files/Incline-Dumbell_7523afc6-1f9d-49d5-83cd-d03f6f93e09d_large.jpg?v=1594061736"><h4>4 set</h4><h4>8-12 rep</h4></div>

    
    </div>
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