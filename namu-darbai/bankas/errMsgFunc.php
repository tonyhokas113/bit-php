<?php
session_start();
function getMessage()
{
    if (!isset($_SESSION['msg'])) {
        return false;
    }
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
    return $msg;
}

function setStyle()
{
    if (!isset($_SESSION['style'])) {
        return null;
    }
    $style = $_SESSION['style'];
    unset($_SESSION['style']);
    return $style;
}

function setMessage(string $msg, $style)
{
    $_SESSION['msg'] = $msg;
    $_SESSION['style'] = $style;
}
