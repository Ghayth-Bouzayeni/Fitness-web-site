<?php
// Database configuration
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = "";     // default XAMPP password is empty
$dbname = "site-web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the blog content from form
$blog_content = $conn->real_escape_string($_POST['lost']);

// SQL query to insert data into blogswritten
$sql = "INSERT INTO blogswritten (blogs) VALUES ('$blog_content')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $blog = $_POST["lost"];
    

    $stmt = $conn->prepare("INSERT INTO blogswritten (blogs) VALUES (?)");
    $stmt->bind_param("s", $blog);
    $stmt->execute();
    $stmt->close();

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

include("blog.php");

// Start output buffering
ob_start();
?>

<div id="blogContainer">
    <?php
    $result = $conn->query("SELECT * FROM blogswritten ORDER BY id DESC");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='blogPost'>" . htmlspecialchars($row["blogs"]) . "</div>";
        }
    } else {
        echo "<div class='blogPost'>No blog posts found.</div>";
    }
    ?>
</div>

<?php
// Get the contents of the buffer and then clean it
$htmlOutput = ob_get_clean();
echo $htmlOutput;
$conn->close();
?>
