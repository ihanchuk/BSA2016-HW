<?php
namespace Marvel\Dallas;
use \Marvel\SuperHuman as Hero;

/**
 * Class HankPym
 * @package Marvel\Dallas
 */
class HankPym extends Hero{
    /**
     * Pym constructor.
     */
    public function __construct(){
        parent::setHeroInfo([
            "city"=>"Default City",
            "name"=>"John Doe",
            "nickname"=>"Hank Pym"
        ]);
    }
}