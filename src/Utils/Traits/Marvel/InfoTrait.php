<?php
namespace Utils\Traits\Marvel;
trait InfoTrait{
    /**
     * 
     */
    public static function whoami(){
        $nickname = self::$profile["nickname"];
        $city = self::$profile["city"];
        $greeting = "I'am {$nickname} from {$city}";

        return $greeting;
    }

}