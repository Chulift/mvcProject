<?php
if ($_SESSION['type'] == "USER") {
    $m = unserialize($_SESSION['member']);
    $arr = $m->toArray();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../style/stylesheet.css">
        <title>User</title>
    </head>
    <body>
    <a class="button blue" href="../index.php">HOME</a>
    <h1>USER PAGE!!</h1>
    <h2>ข้อมูล</h2>
    <ul>
        <?php foreach ($arr as $key => $value) { ?>
            <li><?php echo $key . " : " . $value; ?></li>
        <?php } ?>
    </ul>
    </body>
    </html>
    <?php
}
exit(0);
/*
show_source("class/Authentication.class.php");
show_source("user_home.php");
show_source("db_user.inc.php");
*/
?>