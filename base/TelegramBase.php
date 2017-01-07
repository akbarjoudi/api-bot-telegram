<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace aki\base;
 
/**
 * Description of telegram
 *
 * @author user
 */
class TelegramBase extends Component{
    public $botToken;
    public $botUsername;
    
    
    protected function array_push_assoc(&$array, $key, $value){
       $array[$key] = $value;
    }

    protected function curl_call($url, $option=array(), $headers=array()){
        $attachments = ['photo', 'sticker', 'audio', 'document', 'video'];
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, "PostManGoBot 1.0");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if (count($option)) {
            curl_setopt($ch, CURLOPT_POST, true);

            foreach($attachments as $attachment){
                if(isset($option[$attachment])){
                    $option[$attachment] = $this->curlFile($option[$attachment]);
                    break;
                }
            }
            curl_setopt($ch, CURLOPT_POSTFIELDS, $option); 
        }
        $r = curl_exec($ch);
        if($r == false){
            echo 'eror '.curl_error($ch);
        }
        curl_close($ch);
        return $r;
    }

    protected function curlFile($path){
        if (is_array($path))
            return $path['file_id'];

        $realPath = realpath($path);

        if (class_exists('CURLFile'))
            return new \CURLFile($realPath);

        return '@' . $realPath;
    }
}
