<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace aki\type;

use aki\base\Type;
/**
 * Description of Sticker
 *
 * @author user
 */
class Sticker extends Type{
    private $_file_id;
    
    private $_width;
    
    private $_height;
    
    private $_thumb;
    
    private $_emoji;
    
    private $_file_size;
    
    public function getFile_id() {
        return $this->_file_id;
    }
    
    public function getWidth() {
        return $this->_width;
    }
    
    public function getHeight() {
        return $this->_height;
    }
    
    /**
     * 
     * @return \aki\type\PhotoSize
     */
    public function getThumb() {
        return new PhotoSize($this->_thumb);
    }
    
    public function getEmoji() {
        return $this->_emoji;
    }
    
    public function getFile_size() {
        return $this->_file_size;
    }
    
    
    public function setFile_id($value) {
        $this->_file_id = $value;
    }
    
    public function setWidth($value) {
        $this->_width = $value;
    }
    
    public function setHeight($value) {
        $this->_height = $value;
    }
    
    public function setThumb($value) {
        $this->_thumb = $value;
    }
    
    public function setEmoji($value) {
        $this->_emoji = $value;
    }
    
    public function setFile_size($value) {
        $this->_file_size = $value;
    }
}
