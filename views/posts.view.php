<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<form>
    <input name='id' value='<?= ($_GET["id"] ?? "") ?>' />
    <button>Submit</button>
</form>

<form>
    <input name='category' value='<?= ($_GET["category"] ?? '') ?>' />
    <button>Filter by category</button>
</form>

<p>Categories</p>

<form>

    <select name='category'>
        <option value='sport'>Sport</option>
        <option value='music'>Music</option>
        <option value='food'>Food</option>
    </select>
    <button>Submit</button>
</form>

<h1>Posts</h1>

<ul>
    <?php foreach ($posts as $post) { ?>

        <li> <?= htmlspecialchars($post["title"]) ?> </li>
    <?php } ?>


</ul>

<?php require "components/footer.php" ?>