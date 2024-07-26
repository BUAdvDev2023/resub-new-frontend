<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LoginScreen</title>
    <link rel="stylesheet" href="/login_style.css">
    <script src="/login_script.js"></script>
</head>

<!--Button to go back to the main page-->
<a id="homeButton" href="/frontend_home.php">
    <button id="action">Home Page</button>
</a>

<!--Background image-->
<form id="BackgroundImageSection" method="post" action="login.php">
    <img src="Images/backgroundimg2.jpg" alt="Background Image">
    <!--Area for user input-->
    <div id="rectangle">
        <h1>Log in</h1>
        <input type="text" id="emailInput" placeholder="Email" name="email">
        <div>
            <input type="password" id="passInput" placeholder="Password" name="password">
            <img id="passIcon" src="Images/showPassword.png" onclick=pass()></img>
        </div>

        <input type="submit" value="Log in" id="submit" name="submit">

        <p>Don't have an account?</p>
        <a href="/signup.php" class="link">Sign up</a>

        <?php
        if (isset($_POST["submit"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $encryptedPass = hash("sha256", $password);
            $msg = "";

            $servername = "db";
            $username = "root";
            $password = "strongpass";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=Company_database", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT Email, Password FROM Customer WHERE Email='$email' AND Password='$encryptedPass'");
                $stmt->execute();
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $msg = "Logged in successfully";
                header("Location:frontend_home.php");
            } catch (PDOException $e) {
                $msg = "Connection failed";
            }

            $conn = null;
        }

        echo "<p id='output'>$msg</p>";
        ?>

    </div>
</form>

</html>