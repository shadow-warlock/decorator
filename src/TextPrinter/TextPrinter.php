<?php

namespace App\TextPrinter;

class TextPrinter implements TextPrinterInterface
{

    public function print(string $text): string
    {
        return $text;
    }
}