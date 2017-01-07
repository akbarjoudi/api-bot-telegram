<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace aki\base;

/**
 * Description of Component
 *
 * @author user
 */
class Component extends Object{
    
    
   public function __get($name) {
        $geter = 'get'.ucfirst($name);
        if(method_exists($this, $geter)){
            return $this->$geter();
        }
        
    }
    
    public function __set($name, $value) {
        $seter = 'set'.ucfirst($name);
        if(method_exists($this, $seter)){
            $this->$seter($value);
        }
    }
}
