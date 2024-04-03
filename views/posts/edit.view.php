<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>


<form method="POST">
    <label>
        <input name="title" value="<?= $_POST["title"] ?? "" ?>">
    </label>
</form>

<?php require "views/components/footer.php" ?>