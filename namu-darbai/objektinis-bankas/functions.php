<?php
function getMessage()
{
    if (!isset($_SESSION['msg'])) {
        return false;
    }
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
    return $msg;
}

function setClass()
{
    if (!isset($_SESSION['class'])) {
        return null;
    }
    $class = $_SESSION['class'];
    unset($_SESSION['class']);
    return $class;
}

function setSvg()
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

function setMessage(string $msg, $class, $svg)
{
    $_SESSION['msg'] = $msg;
    $_SESSION['class'] = $class;
    $_SESSION['svg'] = $svg;
}

function generateIban()
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
