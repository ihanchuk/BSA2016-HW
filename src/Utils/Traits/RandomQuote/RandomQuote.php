<?php
namespace Utils\Traits\RandomQuote;
trait RandomQuote{
    public function getRandomQuote(){
        $len = count($this->quotesCollection) -1;
        $quoteNumber = mt_rand(0,$len);
        return $this->quotesCollection[$quoteNumber];
    }
}
