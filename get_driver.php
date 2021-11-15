<?php
$int = rand(2,10);
sleep($int);
$driver = [
    'Amir', 'Shaahin', 'Andia'
];
$intDriver = rand(0,count($driver)-1);

echo "Thanks you to wait for $int seconds. Your Driver is {$driver[$intDriver]}";