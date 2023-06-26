<?php

namespace App\TextPrinter;

class TextPrinterDecorator implements TextPrinterInterface
{

    public function __construct(
        private TextPrinterInterface $wrapped
    ) {
    }

    public function print(string $text): string
    {
        return $this->wrapped->print($text);
    }
}