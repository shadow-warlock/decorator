<?php

use App\TextPrinter\HtmlTagDecorator;
use App\TextPrinter\MoneyDecorator;
use App\TextPrinter\TextPrinter;

spl_autoload_register(static function ($class_name) {
    include __DIR__ . '/src/' . str_replace("\\", "/", substr($class_name, 4)) . '.php';
});

$text = '30.999';
$printer = new HtmlTagDecorator(
    new MoneyDecorator(
        new TextPrinter(),
        '$',
        2,
        '.',
        ' '
    ),
    'div',
    'color="red"'
);

echo $printer->print('12233344445555');