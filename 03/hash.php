<?php


$stringas1 = '123';
$stringas2 = 'mama2';

echo md5($stringas1);
echo '<br>';
echo md5($stringas1);
echo '<br>';
echo md5($stringas1);
echo '<br>';
echo sha1($stringas2);
echo '<br>';
echo password_hash($stringas2, CRYPT_BLOWFISH);
echo '<br>';
var_dump(password_verify($stringas2, '$2y$10$m91fjY9943xFP./VxYBRR.kswUk8vjtSOs4OvXdso/5i8NA8TFStW'));