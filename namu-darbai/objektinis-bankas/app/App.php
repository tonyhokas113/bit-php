<?php

namespace Bank;

class App
{

    public static function start()
    {
        ob_start();
        self::router();
        ob_end_flush();
    }

    public static function view($file, $data = [])
    {
        extract($data);
        require DIR . 'views/' . $file . '.php';
    }

    public static function redirect($path = '')
    {
        header('Location: ' . URL . $path);
        die;
    }

    public static function checkLogin()
    {
        if (!isset($_SESSION['logged'])) {
            self::redirect('login');
        }
    }

    private static function router()
    {
        // $uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
        $uri = $_SERVER['REQUEST_URI'];

        $uri = explode('/', $uri);

        array_shift($uri);

        if ('login' == $uri[0]) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new LoginController)->showLogin();
            } else {
                return (new LoginController)->doLogin();
            }
        }

        if ('logout' == $uri[0]) {
            unset($_SESSION['logged'], $_SESSION['name']);
            self::redirect('login');
        }


        if ('create-user' == $uri[0]) {
            self::checkLogin();
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new BankController)->create();
            } else {
                return (new BankController)->save();
            }
        }

        if ('add' == $uri[0] && isset($uri[1])) {
            self::checkLogin();
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new BankController)->add($uri[1]);
            } else {
                return (new BankController)->doAdd($uri[1]);
            }
        }

        if ('rem' == $uri[0] && isset($uri[1])) {
            self::checkLogin();
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new BankController)->remove($uri[1]);
            } else {
                return (new BankController)->doRemove($uri[1]);
            }
        }

        if ('delete' == $uri[0] && isset($uri[1]) && 'POST' == $_SERVER['REQUEST_METHOD']) {
            self::checkLogin();
            return (new BankController)->delete($uri[1]);
        }

        if ($uri[0] == '') {
            return (new BankController)->index();
        }

        self::view('404');
        http_response_code(404);
    }

    public static function getMessage()
    {
        if (!isset($_SESSION['msg'])) {
            return false;
        }
        $msg = $_SESSION['msg'];
        unset($_SESSION['msg']);
        return $msg;
    }

    public static function setClass()
    {
        if (!isset($_SESSION['class'])) {
            return null;
        }
        $class = $_SESSION['class'];
        unset($_SESSION['class']);
        return $class;
    }

    public static function setSvg()
    {
        if (!isset($_SESSION['svg'])) {
            return null;
        }
        if ($_SESSION['svg'] == 'V') {
            unset($_SESSION['svg']);
            return '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>';
        }
        if ($_SESSION['svg'] == 'I') {
            unset($_SESSION['svg']);
            return '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>';
        }
        if ($_SESSION['svg'] == '!') {
            unset($_SESSION['svg']);
            return '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>';
        }
    }

    public static function setMessage(string $msg, $class, $svg)
    {
        $_SESSION['msg'] = $msg;
        $_SESSION['class'] = $class;
        $_SESSION['svg'] = $svg;
    }

    public static function generateIban()
    {
        $iban = 'LT10 1234 5';
        for ($i = 0; $i < 13; $i++) {
            if ($i == 3 || $i == 8) {
                $iban .= ' ';
            } else {
                $iban .= rand(0, 9);
            }
        }
        return $iban;
    }
}
