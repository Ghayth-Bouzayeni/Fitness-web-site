<?php

require_once 'config.php';



$email = $password = '';
$errors = array();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = htmlspecialchars($_POST['emailInput']);
    $password = $_POST['passwordInput'];

    
    $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
       
        $user = $result->fetch_assoc();

        
        if (password_verify($password, $user['password'])) {
           
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];

            
            header("Location: Home page.php");
            exit();
        } else {
            $errors[] = "Mot de passe incorrect.";
        }
    } else {
        $errors[] = "Email non trouvé.";
    }

    
    $stmt->close();
}


if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
}
?>

<html lang="en">
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitHub</title>
<link rel="stylesheet" href="HOME style sheet.css">
<link rel="stylesheet" href="sign-logn.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela Round">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

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

    <div class="part-2">
        <div id="login">
            <h1 class="titre1">LOGIN</h1>
            <form id="loginForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label>Email</label>
                <input type="email" id="emailInput" name="emailInput" value="<?php echo htmlspecialchars($email); ?>" placeholder="Email" required><br>
                <label>Password</label>
                <input type="password" id="passwordInput" name="passwordInput" placeholder="Password" required><br>
                <input type="submit" value="Submit">
            </form>
            <p class="extr">Don't have an account? <a href="index.php">Sign up Here</a></p>
        </div>
    </div>

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
