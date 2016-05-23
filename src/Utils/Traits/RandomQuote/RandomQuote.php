<?php

namespace Utils\Traits\Quotes;

trait Quotes{
    public function getRandomQuote(){
        $len = count($this->quotesCollection);
        $quoteNumber = mt_rand(1,$len);
        return $this->quotesCollection[$quoteNumber];
    }
}
