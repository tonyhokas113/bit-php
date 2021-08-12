<?php

namespace Bank;

class LoginController
{

    // private static $dbType = 'json';
    private static $dbType = 'maria';

    public static function getData()
    {
        if (self::$dbType == 'json') {
            return Json::getJson();
        }
        if (self::$dbType == 'maria') {
            return Maria::getMaria();
        }
    }

    public function doLogin()
    {
        $name = $_POST['user'];
        $pass = md5($_POST['password']);

        $user = self::getData()->getUser($name, $pass);

        // $users = json_decode(file_get_contents(__DIR__ . './json/bankUsers.json'), 1);
        // foreach ($users as $user) {
        //     if ($user['name'] == $_POST['user']) {
        //         if ($user['pass'] == md5($_POST['password'])) {
        //             $_SESSION['loggedIn'] = 1;
        //             $_SESSION['user'] = $user['name'];

        if (empty($user)) {
            App::redirect(); // + pranesimas, kad blogas kazkas
        }
        $_SESSION['logged'] = 1;
        $_SESSION['name'] = $name;
        App::redirect('views/homePage.php');
    }
}
