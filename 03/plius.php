<?php

$i = 1;
echo $i++ * $i++;
echo '<br> 1 * 2 <br>';

$i = 1;
echo ++$i * $i++;
echo '<br> 2 * 2 <br>';

$i = 1;
echo ++$i * ++$i;
echo '<br> 2 * 3 <br>';

$i = 1;
echo $i++ * ++$i;
echo '<br> 1 * 3 <br>';