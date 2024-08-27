<?php
    if(isset($_POST["submitButton"])) {
        echo "Form was submitted."
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Gemflix</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
    </head>
    <body>
        
        <div class="signInContainer">

            <div class="column">

                <div class="header">
                    <img src="assets/images/logo.png" title="Logo" alt="Gemflix Logo" />
                    <h3>Sign In</h3>
                    <span>to continue to Gemflix</span>
                </div>

                <form method="POST">

                    <input type="text" name="username" placeholder="Username" required>

                    <input type="password" name="password" placeholder="Password" required>

                    <input type="submit" name="submitButton" value="Submit">
                
                </form>

                <a href="register.php" class="signInMessage">Need an account? Sign up here!</a>

            </div>

        </div>

    </body>
</html>