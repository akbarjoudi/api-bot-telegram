<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace aki\type;

/**
 * Description of Chat
 *
 * @author user
 */
class Chat extends \aki\base\Type{
    private $_id;
    
    private $_type;
    
    private $_title;
    
    private $_username;
    
    private $_first_name;
    
    private $_last_name;
    
    private $_all_members_are_administrators;
    
    /**
     * 
     * @return integer
     */
    public function getId(){
        return $this->_id;
    }
    
    public function getType() {
        return $this->_type;
    }
    
    public function getTitle() {
        return $this->_title;
    }
    
    public function getUsername() {
        return $this->_username;
    }
    
    public function getFirst_name() {
        return $this->_first_name;
    }
    
    public function getLast_name() {
        return $this->_last_name;
    }
    
    public function getAll_members_are_administrators() {
        return $this->_all_members_are_administrators;
    }
    
    public function setId($value) {
        $this->_id = $value;
    }
    
    public function setType($value) {
        $this->_type = $value;
    }
    
    public function setTitle($value) {
        $this->_title = $value;
    }
    
    public function setUsername($value) {
        $this->_username = $value;
    }
    
    public function setFirst_name($value) {
        $this->_first_name = $value;
    }
    
    public function setLast_name($value) {
        $this->_last_name = $value;
    }
    
    public function setAll_members_are_administrators($value) {
        $this->_all_members_are_administrators = $value;
    }
}
