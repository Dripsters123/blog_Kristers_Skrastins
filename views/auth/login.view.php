<?php require "views/components/head.php" ?>
<h1 style="text-align: center;">Login</h1>

<form method="POST">
  <label>
    email:
    <input name="email" type="email" />
  </label>
  <?php if (isset($errors["email"])) { ?>
    <p><?= $errors["email"] ?></p>
  <?php } ?>
  <label>
    Password:
    <input name="password" type="password" />
  </label>
  <?php if (isset($errors["password"])) { ?>
    <p><?= $errors["password"] ?></p>
  <?php } ?>
  <button>Login</button>
</form>
<a href="/register">Register</a>

<?php if (isset($_SESSION["flash"])) { ?>
  <p><?= $_SESSION["flash"] ?></p>
<?php } ?>
<?php require "views/components/footer.php" ?>