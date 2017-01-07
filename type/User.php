<?php
namespace aki\type;

use aki\base\Type;
/**
 * Description of User
 *
 * @author user
 */
class User extends Type{
    
    private $_id;
    private $_first_name;
    private $_last_name;
    private $_username;
    
    
    public function getId() {
        return $this->_id;
    }
    
    public function getFrist_name() {
        return $this->_first_name;
    }
    
    public function getLast_name() {
        return $this->_last_name;
    }
    
    public function getUsername() {
        return $this->_username;
    }
    
    public function setId($value) {
        $this->_id = $value;
    }
    
    public function setFirst_name($value) {
        $this->_first_name = $value;
    }
    
    public function setLast_name($value) {
        $this->_last_name = $value;
    }
    
    public function setUsername($value) {
        $this->_username = $value;
    }
}
