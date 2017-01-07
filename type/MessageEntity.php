<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace aki\type;

use aki\base\Type;
use aki\type\User;
/**
 * Description of MessageEntity
 *
 * @author user
 */
class MessageEntity extends Type{
    private $_type;

    private $_offset;
    
    private $_length;
    
    private $_url;
    
    private $_user;
    
    public function getType() {
        return $this->_type;
    }
    
    public function getOffset() {
        return $this->_offset;
    }
    
    public function getLength() {
        return $this->_length;
    }
    
    public function getUrl() {
        return $this->_url;
    }
    
    /**
     * 
     * @return User
     */
    public function getUser() {
        return new User($this->_url);
    }
    
    public function setType($value) {
        $this->_type = $value;
    }
    
    public function setOffset($value) {
        $this->_offset = $value;
    }
    
    public function setLength($value) {
        $this->_length = $value;
    }
    
    public function setUser($value) {
        $this->_user = $value;
    }
    
    public function setUrl($value) {
        $this->_url = $value;
    }
}
