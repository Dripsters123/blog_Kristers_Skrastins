<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Create a Post</h1>

<form method="POST">
    <label>Title:
        <input name="title" value="<?= ($_POST["title"]) ?? "" ?>" />
        <?php if (isset($errors["title"])) { ?>
            <p class="invalid-data"><?= $errors["title"] ?></p>
        <?php } ?>
    </label>
    <label>Category ID:
        <select name="category-id">
            <option value="1" <?= ($_POST["category-id"] ?? $post["category-id"]) == 1 ? "selected" : "" ?>>sport</option>
            <option value="2" <?= ($_POST["category-id"] ?? $post["category-id"]) == 1 ? "selected" : "" ?>>music</option>
            <option value="3" <?= ($_POST["category-id"] ?? $post["category-id"]) == 1 ? "selected" : "" ?>>food</option>
        </select>
        <?php if (isset($errors["category-id"])) { ?>
            <p class="invalid-data"><?= $errors["category-id"] ?></p>
        <?php } ?>
    </label>
    <button>Save</button>
</form>

<?php require "views/components/footer.php" ?>