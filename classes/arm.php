
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
    <div class="CHEST">
        <div class="chest-img" ><img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGu75Ow_K8koqss6sLRjvMpCYKKlsTSZ2XSMBUZJgAc78i44kxHygxX2vRWGwGkxqbgrE&usqp=CAU"><h4>4 set</h4><h4>8-12 rep</h4></div>
     <div class="chest-img" ><img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0RyUykUNOeMFztiTE8kAHFwaPW1PaJfBlNoQLQFlsq1UWFxzFAzHV_4cRuT8Gs50mG10&usqp=CAU"><h4>4 set</h4><h4>8-12 rep</h4></div>
     <div class="chest-img" ><img class="img" src="https://i.pinimg.com/originals/ff/8a/39/ff8a397bc41421adbd4e65677ef1a2fb.jpg"><h4>4 set</h4><h4>8-12 rep</h4></div>
     <div class="chest-img" ><img class="img" src="https://image.boxrox.com/2019/06/Incline-Dumbbell-Curl.png"><h4>4 set</h4><h4>8-12 rep</h4></div>
     <div class="chest-img" ><img class="img" src="data:image/jpeg;base64,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"><h4>4 set</h4><h4>8-12 rep</h4></div>
     <div class="chest-img" ><img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlARrKiQnTlYg_OjbrGq8A4IFPBV6d865iYQ&usqp=CAU"><h4>4 set</h4><h4>8-12 rep</h4></div>
     <div class="chest-img" ><img class="img" src="https://qph.cf2.quoracdn.net/main-qimg-6bfdcde8f6c07a8a0eef6c8db7c3eea6-lq"><h4>4 set</h4><h4>8-12 rep</h4></div></div>
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