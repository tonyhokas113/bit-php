<?php require DIR . 'views/top.php' ?>

<div class="logoDiv">
    <img src="./img/Bit-bankas.jpg" alt="banner">
</div>
<div class="background"></div>
<div class="login">
    <?php include __DIR__ . '/errorMsg.php' ?>
    <form class="box" action="" method="post">
        <label for="user">Prisijungimo vardas</label>
        <input class="form-control" id="user" type="text" name="user">
        <label for="psw">Slaptažodis</label>
        <input class="form-control" id="psw" type="password" name="password">
        <button class="btn-sm btn btn-outline-dark" type="submit">Prisijungti</button>
    </form>
</div>

<?php require DIR . 'views/bottom.php' ?>