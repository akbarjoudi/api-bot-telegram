<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loger
 *
 * @author user
 */
class Console {
    public static $keyborad = [
        
    ];
    
    public static function log($telegram, $text)
    { 
        if(!is_string($text))
        {
            ob_start();
            echo var_dump($text);
            $text = ob_get_contents();
        }
        if(!empty(self::$keyborad))
        {
            $telegram->sendMessage([
                'chat_id' => Input::getChatID(),
                'text' => $text,
                'reply_markup' => json_encode([
                    'keyboard' => self::$keyborad, 
                    'resize_keyboard' => true, 
                    'one_time_keyboard' => true
                ]),
            ]);
            
        }else{
            $telegram->sendMessage([
                'chat_id' => Input::getChatID(),
                'text' => $text,
            ]);
        }
        
        exit();
    }
}
