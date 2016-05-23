<?php
namespace Marvel\Azgard;
use \Marvel\SuperHuman as Hero;

/**
 * Class Thor
 * @package Marvel\Azgard
 */
class Thor extends Hero{
    /**
     * Wasp constructor.
     */
    public function __construct(){
        parent::setHeroInfo([
            "city"=>"Azgard",
            "name"=>"Thor,son of Odin",
            "nickname"=>"Mighty Thor"
        ]);
    }
}