<?php

namespace App\TextPrinter;

class MoneyDecorator extends TextPrinterDecorator
{

    public function __construct(
        private TextPrinterInterface $wrapped,
        private string               $moneySymbol = '₽',
        private int                  $decimals = 0,
        private ?string              $decimal_separator = ".",
        private ?string              $thousands_separator = ","
    )
    {
        parent::__construct($wrapped);
    }

    public function print(string $text): string
    {

        return number_format(
                floatval($this->wrapped->print($text)),
                $this->decimals,
                $this->decimal_separator,
                $this->thousands_separator
            ) . ' ' . $this->moneySymbol;
    }
}