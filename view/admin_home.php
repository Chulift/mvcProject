<?php
/**
 * Created by PhpStorm.
 * User: chulift
 * Date: 3/2/2017
 * Time: 8:57 PM
 */


function show($arr)
{
    foreach ($arr as $k => $val) {
        echo "<div><form action='#' method='get'>";

        $value = $val->toArray();
        foreach ($value as $key => $item) {
            echo "<input type='hidden' name = 'id' value='" . $val->getId() . "'/>";
            if ($key == "type")
                echo "<div>$key : $item</div>";
            else
                echo "<div>$key : <input type='text' name = '{$key}' value='{$item}'</div>";
        }
        echo "<div>";
        echo "<input type='submit' name='update' value='UPDATE' />";
        echo "<input type='submit' name='delete' value='DELETE' />";
        echo "</div></form></div><br />";
    }
}

if ($_SESSION['type'] == "ADMIN") {
    $m = get_users();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../style/stylesheet.css">
        <title>Admin</title>
    </head>
    <body>
    <a class="button blue" href="../index.php">HOME</a>
    <h1>ADMIN PAGE!!</h1>
    <form action="" method="get">
        <input class="button green" type="submit" name="add" value="ADD">
    </form>
    <div>
        <?php show($m); ?>
    </div>
    </body>
    </html>
    <?php
}

exit(0);

//show_source("class/Authentication.class.php");


/*show_source("admin_home.php");
show_source("db_user.inc.php");
*/
?>