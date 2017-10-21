<?php
namespace aki\type;

use aki\base\Type;
/**
 * Description of Game
 *
 * @author user
 */
class Game extends Type{
    private $_title;

    private $_description;

    private $_photo;

    private $_text;

    private $_text_entities;

    private $_animation;


    public function getTitle()
    {
    	return $this->_title;
    }

    public function getDescription()
    {
    	return $this->_description;
    }

    public function getPhoto()
    {
    	return $this->_photo;
    }

    public function getText()
    {
    	return $this->_text;
    }

    public function getText_entities()
    {
    	return $this->_text_entities;
    }

    public function getAnimation()
    {
    	return $this->_animation;
    }
}
