<?php

$email = 'stavre.stavreski@gmail.com';
print_r(filter_var($email, FILTER_VALIDATE_EMAIL));
echo '<br>';


$integer = '123';
print_r(filter_var($integer, FILTER_VALIDATE_INT));
echo '<br>';


$ip = '127.0.0.255';
print_r(filter_var($ip, FILTER_VALIDATE_IP));
echo '<br>';

echo "max execution time => " . ini_get('max_execution_time');

ini_set('max_execution_time', 3);

sleep(2);
echo 'I had a nice sleep';