<?php require __DIR__ . '/top.php' ?>


<div class="fillBg">
    <img class="logo" src="../img/cover.png" alt="logo">
</div>
<div class="navDivSize">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://127.0.0.1/bit-php/namu-darbai/objektinis-bankas/views/homePage.php">Sąskaitų sąrašas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1/bit-php/namu-darbai/objektinis-bankas/views/newUser.php">Sukurti naują sąskaitą</a>
        </li>
    </ul>
    <?php if (isset($_SESSION['loggedIn'])) : ?>
        <form action="<?= URL ?>" method="post">
            <input type="hidden" name="logout">
            <button class="btn-sm btn btn-outline-dark logout" type="submit">Atsijungti</button>
        </form>
    <?php endif ?>
    <?php if (isset($_SESSION['user'])) : ?>
        <div class="loggedInArea">
            <img class="userImg" src="../img/user.png" alt="user">
            <span class="loggedInAs"><?= $_SESSION['user'] ?></span>
        </div>
    <?php endif ?>
</div>

<div>
    <table class="table table-striped table-bordered align-middle table-sm table-hover">
        <tr class="table-dark">
            <th>#</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Asmens kodas</th>
            <th>Sąskaitos Nr</th>
            <th>Sąskaitos likutis</th>
            <th>Galimi veiksmai</th>
        </tr>
        <?php foreach ($users as $account) : ?>
            <tr>
                <td>
                    <?= $i++; ?>
                </td>
                <td>
                    <?= $account['name'] ?>
                </td>
                <td>
                    <?= $account['surname'] ?>
                </td>
                <td>
                    <?= $account['userid'] ?>
                </td>
                <td>
                    <?= $account['id'] ?>
                </td>
                <td>
                    <?= $account['amount'] ?>
                </td>
                <td>
                    <form class="formBtnDel" action="?dir=delete&id=<?= $account['id'] ?>" method="post">
                        <button class="btn-sm btn btn-outline-danger" type="submit">Ištrinti sąskaitą</button>
                    </form>
                    <form class="formBtnDel" action="?dir=homeAddFunds&id=<?= $account['id'] ?>" method="post">
                        <button type="submit" class="btn-sm btn btn-outline-dark">Pridėti lėšas</button>
                    </form>
                    <form class="formBtnDel" action="?dir=homeRemFunds&id=<?= $account['id'] ?>" method="post">
                        <button type="submit" class="btn-sm btn btn-outline-dark">Nuskaičiuoti lėšas</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>

<?php require __DIR__ . '/bottom.php' ?>