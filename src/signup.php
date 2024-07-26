<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SignupScreen</title>
    <link rel="stylesheet" href="signup_style.css">
    <script src="signup_script.js"></script>
</head>

<body>
    <!--Button to go back to the main page-->
    <a id="homeButton" href="/frontend_home.php">
        <button id="action">Home Page</button>
    </a>

    <!--Background image-->
    <form id="BackgroundImageSection" method="post" action="signup.php">
        <img src="Images/backimg3.jpg" alt="Background Image">
        <!--Area for user input-->
        <div id="rectangle">
            <h1>Sign up</h1>
            <input type="text" id="fnameInput" placeholder="First name" name="fname">
            <input type="text" id="lnameInput" placeholder="Last name" name="lname">
            <input type="text" id="emailInput" placeholder="Email" name="email">
            <div>
                <input type="password" id="passInput" placeholder="Password" name="password">
                <img id="passIcon" src="Images/showPassword.png" onclick=pass()></img>
                <input type="password" id="passRepeat" placeholder="Retype password" name="retype">
            </div>

            <input type="submit" value="Sign up" id="submit" name="submit">

            <p>Already have an account?</p>
            <a href="login.php" class="link">Log in</a>

            <?php

            if (isset($_POST["submit"])) {

                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $passwordRetype = $_POST["retype"];
                $encryptedPass = hash("sha256", $password);

                $msg = validate($fname, $lname, $email, $password, $passwordRetype, $encryptedPass);

                if ($msg == "Success") {
                    $servername = "db";
                    $username = "root";
                    $password = "strongpass";

                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=Company_database", $username, $password);
                        // set the PDO error mode to exception
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "INSERT INTO Customer (FirstName, LastName, Email, Password)
                        VALUES ('$fname', '$lname', '$email', '$encryptedPass')";
                        $conn->exec($sql);
                        $msg = "Connected Successfully";
                        header("Location:frontend_home.php");
                    } catch (PDOException $e) {
                        $msg = "Connection failed";
                    }

                    $conn = null;
                }
            }

            function validate($fname, $lname, $email, $password, $passwordRetype, $encryptedPass)
            {
                $valid = False;
                $msg = "";

                $nameCheck = "/[A-Z][a-z]*/i";
                $passwordCheck = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";

                if (preg_match($nameCheck, $fname) && preg_match($nameCheck, $fname)) {
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $msg = "Invalid email format";
                    } else {
                        if (preg_match($passwordCheck, $password)) {
                            if ($password === $passwordRetype) {
                                $valid = True;
                                $msg = "Success";
                            } else {
                                $valid = False;
                                $msg = "Error - passwords do not match";
                            }
                        } else {
                            $msg = "Invalid input - password must have a length of 8 and must have at least one each of the following: uppercase letter, lowercase letter, digit, special character";
                        }
                    }
                } else {
                    $msg = "Invalid input - names must be only contain letter and must start with a capital letter";
                }

                return $msg;
            }

            echo "<p id='output'>$msg</p>";
            ?>

        </div>
    </form>
</body>

</html>