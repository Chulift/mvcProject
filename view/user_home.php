<?php
if ($_SESSION['type'] == "USER") {
    $m = unserialize($_SESSION['member']);
    $arr = $m->toArray();
} else
    header("Location: ../index.php");
?>
<?php $title = "user"; ?>
<?php ob_start(); ?>
    <a class="button blue" href="../index.php">HOME</a>
    <h1>USER PAGE!!</h1>
    <h2>ข้อมูล</h2>
    <ul>
        <?php foreach ($arr as $key => $value): ?>
            <li><?php echo $key . " : " . $value; ?></li>
        <?php endforeach; ?>
    </ul>
<?php $content = ob_get_clean(); ?>
<?php include "layout.php"; ?>
<?php exit(0); ?>