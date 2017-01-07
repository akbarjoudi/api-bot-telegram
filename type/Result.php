<?php
namespace aki\type;

use aki\type\Message;
/**
 * Description of Result
 *
 * @author user 
 */
class Result extends \aki\base\Type{
    
    private $_update_id;
    
    private $_message;
    
    public function getUpdateId() {
        return $this->_update_id;
    }
    
    /**
     * 
     * @return aji\type\Message
     */
    public function getMessage() {
        return new Message($this->_message);
    }
    
    
    public function setUpdateId($value) {
        $this->_update_id = $value;
    }
    
    public function setMessage($value) {
        $this->_message = $value;
    }
    
}
