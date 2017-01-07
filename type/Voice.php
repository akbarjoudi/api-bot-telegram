<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace aki\type;

use aki\base\Type;
/**
 * Description of Voice
 *
 * @author user
 */
class Voice extends Type{
    private $_file_id;
    
    private $_duration;
    
    private $_mime_type;
    
    private $_file_size;
    
    public function getFile_id() {
        return $this->_file_id;
    }
    
    public function getDuration() {
        return $this->_duration;
    }
    
    public function getMim_type() {
        return $this->_mime_type;
    }
    
    public function getFile_size() {
        return $this->_file_size;
    }
    
    public function setFile_id($value) {
        $this->_file_id = $value;
    }
    
    public function setDuration($value) {
        $this->_duration = $value;
    }
    
    public function setMim_type($value) {
        $this->_mime_type = $value;
    }
    
    public function setFile_size($value) {
        $this->_file_size = $value;
    }
}
