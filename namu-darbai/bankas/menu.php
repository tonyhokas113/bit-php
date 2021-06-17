<div>
    <a href="?dir=homeList">Sąskaitų sąrašas |</a>
    <a href="?dir=homeNewAcc">Sukurti naują sąskaitą |</a>
    <a href="?dir=homeAddFunds">Pridėti lėšas |</a>
    <a href="?dir=homeRemFunds">Nuskaičiuoti lėšas</a>
    <?php if (isset($_SESSION['loggedIn'])) : ?>
        <form action="http://127.0.0.1/bit-php/namu-darbai/bankas/index.php" method="post">
            <input type="hidden" name="logout">
            <button type="submit">Atsijungti</button>
        </form>
    <?php endif ?>
</div>