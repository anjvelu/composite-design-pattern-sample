<?php

require_once __DIR__ . '/vendor/autoload.php';

$main_menu = new App\Menu('Main Menu');

$laptop_menu = new App\Menu('Laptop');
$laptop_menu->add( new App\Link('L1', '/laptop/l1') );
$laptop_menu->add( new App\Link('L2', '/laptop/l2') );

$cellphone_menu = new App\Menu('CellPhone');
$cellphone_menu->add( new App\Link('DumpPhone', '/cellphone/dump-phone') );

$smartphone_menu = new App\Menu('SmartPhone');
$smartphone_menu->add( new App\Link('S1', '/smartphone/s1') );
$smartphone_menu->add( new App\Link('S2', '/smartphone/s2') );

$cellphone_menu->add($smartphone_menu);


$main_menu->add($cellphone_menu);
$main_menu->add($laptop_menu);

$result = $main_menu->render();

var_dump($result);