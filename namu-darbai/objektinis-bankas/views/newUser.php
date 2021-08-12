<?php require __DIR__ . '/top.php' ?>

<div class="fillBg">
    <img class="logo" src="../img/cover.png" alt="logo">
</div>
<div class="navDivSize">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1/bit-php/namu-darbai/objektinis-bankas/views/homePage.php">Sąskaitų sąrašas</a>
        </li>
        <li class="nav-item">
            <a class="bg-light nav-link active" aria-current="page" href="http://127.0.0.1/bit-php/namu-darbai/objektinis-bankas/views/newUser.php">Sukurti naują sąskaitą</a>
        </li>
    </ul>


    <form action="<?= URL ?>login" method="post">
        <input type="hidden" name="logout">
        <button class="btn-sm btn btn-outline-dark logout" type="submit">Atsijungti</button>
    </form>


    <div class="loggedInArea">
        <img class="userImg" src="../img/user.png" alt="user">
        <span class="loggedInAs"><?= $_SESSION['user'] ?></span>
    </div>

    <div class="formDiv">
        <form class="newAccForm" action="<?= URL ?>/create-user" method="post">
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
</div>


<?php require DIR . 'views/bottom.php' ?>