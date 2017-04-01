<?php
if (isset($_REQUEST['login'])) {
    if ($_REQUEST['login'] == "false") {
        $message = "เข้าสู่ระบบผิดพลาด";
        echo "<script>alert('$message')</script>";
    }
}
?>
<?php $title = "login"; ?>
<?php ob_start(); ?>
<div class="container">
    <div class="text-center">
        <H1>Sign in</H1>
    </div>
    <form method="post" action="#">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="text-center">

            <button class="btn btn-info btn-lg" type="submit" name="login"><span class="glyphicon glyphicon-log-in"></span> Log in</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php include "layout.php"; ?>
