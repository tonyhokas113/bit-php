<div>
<a href="http://localhost/barsukas/13/">Home</a>
<a href="http://localhost/barsukas/13/member.php">Members</a>
<?php if (!isset($_SESSION['logged'])) : ?>
<a href="http://localhost/barsukas/13/login.php">Login</a>
<?php else : ?>
    <a href="http://localhost/barsukas/13/login.php?logout">Logout</a>
</div>
<?php endif ?>