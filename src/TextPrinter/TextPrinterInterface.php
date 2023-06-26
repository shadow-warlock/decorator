<?php

namespace App\TextPrinter;

interface TextPrinterInterface
{
    public function print(string $text): string;
}