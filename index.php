<?php

if (isset($_REQUEST['login'])) {
    if ($_REQUEST['login'] == "false") {
        $message = "เข้าสู่ระบบผิดพลาด";
        echo "<script>alert('$message')</script>";
    }
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="style/stylesheet.css">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    </head>
    <body>
    <div class="main">
        <div class="login-form">
            <div>
                <H1>Sign in</H1>
            </div>
            <form method="get" action="controller/home_controller.php">
                <div class="field">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="text" required>
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="buttons">
                    <button class="button green" type="submit" name="login">Log in</button>
                </div>
            </form>
        </div>
    </div>
    </body>
    </html>
<?php /*
show_source("index.php");
show_source("home_controller.php");
*/
?>