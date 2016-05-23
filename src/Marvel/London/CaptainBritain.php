<?php
namespace Marvel\London;
use \Marvel\SuperHuman as Hero;

/**
 * Class Wasp
 * @package Marvel\London
 */
class CaptainBritain extends Hero{
    /**
     * CaptainBritain constructor.
     */
    public function __construct(){
        parent::setHeroInfo([
            "city"=>"London",
            "name"=>"Cap",
            "nickname"=>"Captain Britain"
        ]);
    }
}