<?php

error_reporting(-1);

require_once 'src/functions.php';

task1(['a','b','c']);
echo task1(['a','b','c'], 1);

echo '<br>';
echo '<br>';

task2('+', 1, 2, 3, 5.2);
task2('*', 1, 2, 3);
task2('/', 15, 1, 3);
task2('-', 1, 2, 3);

echo '<br>';
echo '<br>';

echo task3(4,6);

echo '<br>';
echo '<br>';

echo date('d.m.Y h:i');
echo '<br>';
echo strtotime('24.02.2016 00:00:00');

echo '<br>';
echo '<br>';

echo str_replace('К', '', 'Карл у Клары украл Кораллы');
echo '<br>';
echo str_replace('Две', 'Три', 'Две бутылки лимонада');

echo '<br>';
echo '<br>';

$file = file_put_contents('text.txt', 'Hello again!', 1);
task4('text.txt');