<?php require DIR . 'views/top.php' ?>

<div class="fillBg">
    <img class="logo" src="./img/cover.png" alt="logo">
</div>
<div class="navDivSize">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="?dir=homeList">Sąskaitų sąrašas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?dir=homeNewAcc">Sukurti naują sąskaitą</a>
        </li>
        <li class="nav-item">
            <a class="bg-light nav-link active">Nuskaičiuoti lėšas</a>
        </li>
    </ul>
    <?php if (isset($_SESSION['loggedIn'])) : ?>
        <form action="http://127.0.0.1/bit-php/namu-darbai/objektinis-bankas/login.php" method="post">
            <input type="hidden" name="logout">
            <button class="btn-sm btn btn-outline-dark logout" type="submit">Atsijungti</button>
        </form>
    <?php endif ?>
    <?php if (isset($_SESSION['user'])) : ?>
        <div class="loggedInArea">
            <img class="userImg" src="./img/user.png" alt="user">
            <span class="loggedInAs"><?= $_SESSION['user'] ?></span>
        </div>
    <?php endif ?>
</div>

<?php include __DIR__ . '/errorMsg.php' ?>
<div class="addRemDiv">
    <?php foreach ($accounts as $account) : ?>
        <?php $id = $_GET['id'] ?? 0; ?>
        <?php if ($id == $account['id']) : ?>
            <span class="list">Klientas:</span>
            <span class="accInfo"><?= $account['name'] ?> <?= $account['surname'] ?></span>
            <span class="list">Sąskaitos likutis:</span class="accInfo">
            <span class="accInfo"><?= $account['amount'] ?> eur.</span>
            <form action="?dir=remFunds&id=<?= $account['id'] ?>" method="post">
                <input class="form-control width" type="text" name="remFunds" placeholder="Kiek nuskaičiuoti">
                <button class="createAccBtn btn-sm btn btn-outline-dark" type="submit">Nuskaičiuoti lėšas</button>
            </form>
        <?php endif ?>
    <?php endforeach ?>
</div>

<?php require DIR . 'views/bottom.php' ?>