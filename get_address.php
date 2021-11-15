<?php

$address = [
    'Amirabad', 'Vanak', 'Azadi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''
];
$intAddr = rand(0,count($address)-1);


echo $address[$intAddr];