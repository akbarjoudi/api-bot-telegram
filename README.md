for api bot telegram
============

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require aki/api-bot-telegram "*"
```

or add

```
"aki/api-bot-telegram": "*"
```

to the require section of your `composer.json` file.

Method list usable
-----
list methods
```
getMe
sendMessage
forwardMessage
sendPhoto
sendAudio
sendDocument
sendSticker
sendVideo
sendLocation
sendChatAction
getUserProfilePhotos
getUpdates
setWebhook
getChat
getChatAdministrators
getChatMembersCount
getChatMember
answerCallbackQuery
editMessageText
```

Usage
-----
Once the extension is installed, simply use it in your code by  :

```php
<?php 
$telegram = new Telegram([
    'botToken' => 'your bot token..',
]);
$telegram->senMessage([
        'chat_id' => $chat_id,
        'text' => 'test',
]); 
?>