<?php

$h1 = function (string|array $text): string {
    if (is_array($text)) {
        $text = $text[0];
    }
    return "<h1 style=\"display:inline;\">$text</h1>";
};

$genText = md5(time());
$out = preg_replace_callback('/\d+/', $h1, $genText);

echo $out;
