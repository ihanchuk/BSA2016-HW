<?php
namespace Marvel\Jungle;
use \Marvel\SuperHuman as Hero;

/**
 * Class Wasp
 * @package Marvel\Jungle
 */
class Beast extends Hero{
    /**
     * Wasp constructor.
     */
    public function __construct(){
        parent::setHeroInfo([
            "city"=>"Jungle Polis",
            "name"=>"Beast Doe",
            "nickname"=>"Beast"
        ]);
    }
}