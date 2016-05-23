<?php
namespace Marvel\LA;
use \Marvel\SuperHuman as Hero;

/**
 * Class Wasp
 * @package Marvel\LA
 */
class Wasp extends Hero{
    /**
     * Wasp constructor.
     */
    public function __construct(){
        parent::setHeroInfo([
            "city"=>"LA",
            "name"=>"John Doe",
            "nickname"=>"Wasp"
        ]);
    }
}