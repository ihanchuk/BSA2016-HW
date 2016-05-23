<?php

namespace Marvel;

class SuperHuman{

    use \Utils\Traits\Marvel\InfoTrait;

    private $profile = [];

    /**
     * SuperHuman constructor.
     * @param $hero
     */
    public function __construct($hero)
    {
        $this->profile["city"] = $hero["city"];
        $this->profile["nickname"] = $hero["nickname"];
        $this->profile["name"] = $hero["name"];
    }

}