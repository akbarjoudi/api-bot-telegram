<?php
require './base/Object.php';
require './base/Component.php';
require './base/TelegramBase.php';
require './Telegram.php';
require './Input.php';
require './base/Type.php';
require './type/Result.php';
require './type/Message.php';

$telegram = new aki\Telegram([
    'botToken' => ''
]);
$telegram->addCommand('/start', function($tel){
    $tel->sendMessage([
        'chat_id' => aki\Input::getChatID(),
        'text' => 'akbar'
    ]);
});