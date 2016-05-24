<?php
namespace Utils\Helpers;

class TriangleNumbers
{
    public function __construct($limit)
    {
        $this->limit = $limit;
    }

    public function getNumbers(){

        for ($n=1; $n<=$this->limit; $n++) {
            $res= $n * (($n + 1)/2);
            yield $res;
        }
    }

    public function getResult(){

        $numbers = $this->getNumbers($this->limit);
        $res = [];

        foreach($numbers as $val){
            array_push($res,$val);
        }

        return $res;

    }
}