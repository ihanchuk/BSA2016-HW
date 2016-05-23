<?php
namespace Marvel\Ontario;
use \Marvel\SuperHuman as Hero;

/**
 * Class Batman
 * @package Marvel\Ontario
 */
class Batman extends Hero{
    /**
     * Batman constructor.
     */
        public function __construct(){
            parent::__construct($heroeData=[
                "city"=>"Super City",
                "name"=>"Bruce Wayne",
                "nickname"=>"Batman"
            ]);
        }
}