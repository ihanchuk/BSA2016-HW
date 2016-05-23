<?php
namespace Marvel\NeverLandia;
use \Marvel\SuperHuman as Hero;

/**
 * Class WonderMan
 * @package Marvel\NeverLandia
 */
class WonderMan extends Hero{
    /**
     * WonderMan constructor.
     */
    public function __construct(){
        parent::setHeroInfo([
            "city"=>"NeverLandia",
            "name"=>"John Doe #4",
            "nickname"=>"Wonder Man"
        ]);
    }
}