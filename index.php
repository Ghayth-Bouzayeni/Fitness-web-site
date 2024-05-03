<?php
// Inclure le fichier de configuration pour établir la connexion à la base de données
require_once 'config.php';

// Initialiser les variables pour stocker les valeurs du formulaire
$firstName = $lastName = $email = $password = $confirmPassword = '';
$errors = array();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Si le formulaire est valide (aucune erreur)
    if (empty($errors)) {
        // Hasher le mot de passe avant de l'insérer dans la base de données
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // Préparer la requête SQL d'insertion
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $passwordHash);

        // Exécuter la requête
        if ($stmt->execute()) {
            // Authentification réussie, créer une session utilisateur
            session_start();
            $_SESSION['user_id'] = $stmt->insert_id;
            $_SESSION['email'] = $email;

            // Rediriger vers une page de confirmation ou une autre page après l'inscription
            header("Location: Home page.php");
            exit();
        } else {
            $errors[] = "Erreur lors de l'inscription. Veuillez réessayer.";
        }

        // Fermer la requête
        $stmt->close();
    }
}

// Afficher les erreurs (à personnaliser selon vos besoins)
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
}
?>
  <title>FitHub</title>
<link rel="stylesheet" href="HOME style sheet.css">
<link rel="stylesheet" href="sign-logn.css">
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

    <div class="part-2">
        <div id="signup">
            <h1 class="titre1">SIGN UP</h1>
            <h4 class="titre2">It's free and only takes a minute</h4>
            <form id="signupForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label>First Name</label>
                <input type="text" name="firstName" value="<?php echo htmlspecialchars($firstName); ?>" placeholder="First Name" required><br>
                <label>Last Name</label>
                <input type="text" name="lastName" value="<?php echo htmlspecialchars($lastName); ?>" placeholder="Last Name" required><br>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="Email" required><br>
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" required><br>
                <label>Confirm Password</label>
                <input type="password" name="confirmPassword" placeholder="Confirm Password" required><br>
                <input type="submit" value="Submit">
            </form>
            <p class="extr-1">By clicking this sign up button you agree to our <br> 
                <a href="#">Terms and conditions</a> and <a href="#">Privacy Policy</a></p>
        </div>
        <p class="extr">Already have an account? <a href="login.php">Login in</a></p>
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
