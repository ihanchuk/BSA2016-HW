<?php

namespace Marvel;

class SuperHuman{

    private static $profile = [];
    use \Utils\Traits\Marvel\InfoTrait;

    /**
     * SuperHuman constructor.
     * @param $hero
     */
    public static function setHeroInfo($hero)
    {
        self::$profile["city"] = $hero["city"];
        self::$profile["nickname"] = $hero["nickname"];
        self::$profile["name"] = $hero["name"];
    }

}