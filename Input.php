<?php
namespace aki;
use aki\type\Result;

/**
 * @author Akbar Joudi <akbar.joody@gmail.com>
 */
class Input extends base\Component
{
    private static $data = [];
    /**
     * initialize data
     */
    private static function init()
    {
        if(empty(self::$data)){
            self::$data = json_decode(file_get_contents("php://input"));
        }
    }

    /**
     * 
     * @return aki\type\Result
     * return  data telegram and information user
     */
    public static function get()
    {
        self::init();
        return new Result(self::$data);
    }
    
    public static function getText()
    {
        self::init();
        return (new Result(self::$data))->message->text;
    }
    
    public static function getChatID()
    {
        self::init();
        $result = new Result(self::$data);
        $id = $result->getMessage()->getChat()->getId();
        if(!empty($id)){
            return $id;
        }
        else{
            return null;
        }
    }
    
    public static function getUsername()
    {
        self::init();
        $result = new Result(self::$data);
        $username = $result->getMessage()->getChat()->getUsername();
        return isset($username) ? $username: 'no username';
    }
    
    public static function getFirstname()
    {
        self::init();
        return (new Result(self::$data))->message->chat->first_name;
    }
    
    public static function getLastname()
    {
        self::init();
        return (new Result(self::$data))->message->chat->last_name;
    }
    
    public static function getType()
    {
        self::init();
        $result = new Result(self::$data);
        $type = $result->getMessage()->getChat()->getType();
        return $type;
    }

    public static function getTitle() {
        self::init();
        return isset(self::$data->message->chat->title) ? (new Result(self::$data))->message->chat->title: 'no title';
    }
    public static function getGroupID() {
        self::init();
        if(self::getType() == 'group' || self::getType() == 'supergroup'){
            return (new Result(self::$data))->message->chat->id;
        }
        else{
            return false;
        }
    }
}