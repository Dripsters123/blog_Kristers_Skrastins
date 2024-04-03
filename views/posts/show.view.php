<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1><?= htmlspecialchars($post["title"]) ?></h1>

<form action="/edit" method="POST">
    <input type="text" name="title" ?>
    <button name="id" value="<?= $post['id'] ?>">Edit</button>
</form>

<?php require "views/components/footer.php" ?>