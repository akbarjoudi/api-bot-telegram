<?php
namespace aki\base;


use aki\Utility;
/**
 * Description of Object
 *
 * @author user
 */
class Object {
    public function __construct($config = []) { 
        if(!empty($config)){
            static::configure($this, $config);
        }
    }

    /**
     * Configures an object with the initial property values.
     * @param object $object the object to be configured
     * @param array $properties the property initial values given in terms of name-value pairs.
     * @return object the object itself
     */
    public static function configure($object, $properties)
    {
        foreach ($properties as $name => $value) {
            $object->$name = $value;
        }

        return $object;
    }
    
}
