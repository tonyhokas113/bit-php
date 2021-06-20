<div>
    <a href="http://127.0.0.1/bit-php/13/">Home</a>
    <a href="http://127.0.0.1/bit-php/13/member.php">Members</a>
    <?php if (!isset($_SESSION['logged'])) : ?>
        <a href="http://127.0.0.1/bit-php/13/login.php">Login</a>
    <?php else : ?>
        <a href="http://127.0.0.1/bit-php/13/login.php?logout">Logout</a>
</div>
<?php endif ?>