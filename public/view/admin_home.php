<?php if ($_SESSION['type'] == "ADMIN") $m = get_users(); else header("Location: ../index.php"); ?>
<?php $title = "admin"; ?>
<?php ob_start() ?>
    <a class="btn btn-default" href="../index.php">HOME</a>
    <h1>ADMIN PAGE!!</h1>
    <form action="" method="get">
        <input class="button green" type="submit" name="add" value="ADD">
    </form>
<?php foreach ($m as $val): $item = $val->toArray(); ?>
    <div>
        <?php foreach ($item as $key => $value): ?>
            <input type='hidden' name='id' value='<?= $val->getId(); ?>'/>
            <?php if ($key == "type")
                echo "<div>$key : $value</div>";
            else { ?>
                <div><?= $key . " : "; ?>
                    <input type='text' name='<?= $key ?>' value='<?= $value ?>'</div>
            <?php }endforeach; ?>
        <div>
            <input type='submit' name='update' value='UPDATE'/>
            <input type='submit' name='delete' value='DELETE'/>
        </div>
        </form></div><br/>
<?php endforeach; ?>
<?php $content = ob_get_clean() ?>
<?php include "layout.php"; ?>
<?php exit(0); ?>
