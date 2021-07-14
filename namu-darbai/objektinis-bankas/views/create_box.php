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
            <a class="bg-light nav-link active" aria-current="page" href="?dir=homeNewAcc">Sukurti naują sąskaitą</a>
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

<div class="formDiv">
    <?php include __DIR__ . '/errorMsg.php' ?>
    <form class="newAccForm" action="?dir=addAcc" method="post">
        <label for="name">Įveskite kliento vardą:</label>
        <input class="form-control" id="name" type="text" placeholder="Vardas" name="vardas">
        <label for="surname">Įveskite kliento pavardę:</label>
        <input class="form-control" id="surname" type="text" placeholder="Pavardė" name="pavarde">
        <label for="id">Įveskite kliento asmens kodą:</label>
        <input class="form-control" id="id" type="text" placeholder="Asmens kodas" name="ak">
        <label for="iban">Kliento būsimas saskaitos numeris:</label>
        <input class="form-control" id="iban" type="text" name="iban" value="<?= generateIban() ?>" readonly>
        <button class="createAccBtn btn-sm btn btn-outline-dark" type="submit">Sukurti sąskaitą</button>
    </form>
</div>

<?php require DIR . 'views/bottom.php' ?>