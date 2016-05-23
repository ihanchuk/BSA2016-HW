<?php
namespace Marvel\NY;
use \Marvel\SuperHuman as Hero;

/**
 * Class IronMan
 * @package Marvel\NY
 */
class IronMan extends Hero{
    /**
     * IronMan constructor.
     */
    public function __construct(){
        parent::setHeroInfo([
            "city"=>"New York",
            "name"=>"John Doe #2",
            "nickname"=>"Iron Man"
        ]);
    }
}