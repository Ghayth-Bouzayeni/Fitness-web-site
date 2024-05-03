
<title>FitHub</title>
<link rel="stylesheet" href="HOME style sheet.css">
<link rel="stylesheet" href="sign-logn.css">
<link rel="stylesheet" href="quick-test.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela Round">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<html lang="en">
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

</head>

<body>
    <div id="part1">
        <header>
            <a href="Home page.html" class="firstimage"><img src="422910295_1889582714791570_4471416509259206767_n.png"
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

    <!-- Quiz Container -->
    <div class="quiz-container">
        <div class="quiz-intro">
            <h1>Welcome to the Fitness Quiz!</h1>
            <p>Exercise is important for overall health and well-being. Take this quiz to discover your fitness profile.</p>
            <button onclick="startQuiz()">Start Quiz</button>
        </div>

        <form class="quiz-questions" style="display: none;">
            <div class="question" id="question1">
                <p>What is your preferred workout intensity?</p>
                <input type="radio" name="intensity" value="low" id="low">
                <label for="low">Low</label><br>
                <input type="radio" name="intensity" value="moderate" id="moderate">
                <label for="moderate">Moderate</label><br>
                <input type="radio" name="intensity" value="high" id="high" checked>

                <label for="high">High</label><br>
               
            </div>

            <div class="question" id="question2" style="display: none;">
                <p>How often do you exercise?</p>
                <input type="radio" name="frequency" value="daily" id="daily" checked>
                <label for="daily">Daily</label><br>
                <input type="radio" name="frequency" id="weekly" value="weekly">
                <label for="weekly">Weekly</label><br>
                <input type="radio" id="occasionally" name="frequency" value="occasionally">
                <label for="occasionally">Occasionally</label><br>
                
            </div>

            <div class="question" id="question3" style="display: none;">
                <p >What are your fitness goals?</p>
            
                <input type="radio"  id="weright-loss" name="goals" value="weight-loss" checked>
                <label for="weight-loss">Weight Loss</label><br>
                <input type="radio"  id="muscle-gain" name="goals" value="muscle-gain">
                <label for="muscle-gain">Muscle Gain</label><br>
                <input type="radio"  id="general-fitness" name="goals" value="general-fitness">
                <label for="general-fitness">General Fitness</label><br>
                
            </div>

            <div class="question" id="question4" style="display: none;">
                <p>Do you prefer exercising alone or with others?</p>
                <input type="radio" name="exercise-partner" id="alone" value="alone" checked>
                <label for="alone">Alone</label><br>
                <input type="radio" id="with-others" name="exercise-partner" value="with-others">
                <label for="with-others">With Others</label><br>
            
            </div>

            <button type="button" id="nextq" onclick="nextQuestion()">Next</button>
            <button type="button" id="submitq" onclick="submitQuiz()" style="display: none;">Submit</button>
        </form>

        <div class="quiz-results" style="display: none;">
            <h2>Quiz Results:</h2>
            <p id="quizResultMessage"></p>
        </div>
    </div>
    <script src="quiz.js"></script>
    <footer class="end">
        <div class="endl">
            <a href="Home page.php"><img src="422910295_1889582714791570_4471416509259206767_n.png" class="endpic"></a>
            <p class="copy">© 2024 The Limit. All Rights Reserved</p>
        </div>
        <div class="endm">
            <div class="endmpic">
                <a href="https://www.facebook.com" target="_blank"><img src="facebook logo.jpg" class="endpics"></a>
                <a href="https://www.instagram.com" target="_blank"><img src="instagram logo.jpg" class="endpics"></a>
                <a href="https://www.tiktok.com" target="_blank"><img src="tiktok logo.jpg" class="endpics"></a>
            </div>
            <p class="endpar">Contact us on Facebook, Instagram or TikTok</p>
        </div>
    </footer>


   
</body>

</html>
