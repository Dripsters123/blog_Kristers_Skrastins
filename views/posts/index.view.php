<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>


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
        <li>
            <a href="/show?id=<?= $post['id'] ?>">
                <?= htmlspecialchars($post["title"]) ?> </a>
            <form class="delete-form" method="POST" action="/delete">
                <button name="id" value="<?= $post['id'] ?>">Delete</button>
            </form>
        </li>
    <?php } ?>
</ul>

<?php require "views/components/footer.php" ?>