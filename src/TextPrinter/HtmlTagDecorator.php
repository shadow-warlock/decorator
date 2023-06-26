<?php

namespace App\TextPrinter;

class HtmlTagDecorator extends TextPrinterDecorator
{

    public function __construct(
        private TextPrinterInterface $wrapped,
        private string $tag,
        private string $attributes = ''
    ) {
        parent::__construct($wrapped);
    }

    public function print(string $text): string
    {
        return sprintf('<%s %s>%s</%s>', $this->tag, $this->attributes, $this->wrapped->print($text), $this->tag);
    }
}