
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
        <div class="chest-img" ><img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFX_8Z8kRWZYMyhfA98YME9TjUBhVZcOzAsr3W7hjmmByCBav54y26VHNXmz6AC97JCM0&usqp=CAU"><h4>4 set</h4><h4>8-12 rep</h4></div>
     <div class="chest-img" ><img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTAxW-05XtYs-gH5QbUJ46BSaNzemYczBp3_rKbfMF_2ggTS430NsG4SyzvzreXCEjgZQ&usqp=CAU"><h4>4 set</h4><h4>8-12 rep</h4></div>
     <div class="chest-img" ><img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVuTLXF4AzCvpqgHDNAynlvTfNfEpktMQCWpZs6HuBhWwkOqB68iiNsQbY1sLaH7YwxLw&usqp=CAU"><h4>4 set</h4><h4>8-12 rep</h4></div>
     <div class="chest-img" ><img class="img" src="https://www.mensjournal.com/.image/t_share/MTk2MTM3MTgwODU1OTM2NTE3/1-deadlift.jpg"><h4>4 set</h4><h4>8-12 rep</h4></div>
     <div class="chest-img" ><img class="img" src="https://i.pinimg.com/736x/ec/7a/04/ec7a0414d58ff6ea5425833040fe7134.jpg"><h4>4 set</h4><h4>8-12 rep</h4></div>
     <div class="chest-img" ><img class="img" src="https://image.winudf.com/v2/image1/Y29tLkd5bVdvcmtvdXRFeGVyY2lzZXMuYXJzeWFhcHBzX3NjcmVlbl8wXzE1NTI1ODQ4NzZfMDI2/screen-0.webp?fakeurl=1&type=.webp"><h4>4 set</h4><h4>8-12 rep</h4></div>
     <div class="chest-img" ><img class="img" src="https://cdn.shopify.com/s/files/1/1585/6091/files/Incline-Dumbell_7523afc6-1f9d-49d5-83cd-d03f6f93e09d_large.jpg?v=1594061736"><h4>4 set</h4><h4>8-12 rep</h4></div></div>
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