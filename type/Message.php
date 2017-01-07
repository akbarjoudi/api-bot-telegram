<?php
namespace aki\type;

use aki\base\Type;
/**
 * Description of Message
 *
 * @author user
 */
class Message extends Type{
    /**
     *
     * @var Integer
     */
    private $_message_id;
    
    /**
     *
     * @var User
     */
    private $_from;
    
    /**
     *
     * @var Integer
     */
    private $_date;
    
    /**
     *
     * @var Chat
     */
    private $_chat;
    
    /**
     *
     * @var User 
     */
    private $_forward_from;
    
    /**
     *
     * @var User 
     */
    private $_forward_from_chat;
    
    private $_forward_from_message_id;
    
    private $_forward_date;
    
    
    private $_game;
    
    private $_video;

    /**
     *
     * @var Message 
     */
    private $_reply_to_message;
    
    /**
     *
     * @var Integer 
     */
    private $_edit_date;
    
    /**
     *
     * @var string 
     */
    private $_text;
    
    /**
     *
     * @var Array of MessageEntity 
     */
    private $_entities;
    
    /**
     *
     * @var Audio
     */
    private $_audio;
    
    /**
     *
     * @var Document
     */
    private $__document;
    
    private $_photo;
    
    private $_voice;

    private $_caption;

    private $_contact;
    
    private $_location;

    private $_venue;
    
    private $_new_chat_member;

    private $_left_chat_member;

    private $_new_chat_title;
    
    private $_delete_chat_photo;
    
    private $_group_chat_created;
    
    private $_supergroup_chat_created;

    private $_channel_chat_created;
    
    private $_migrate_to_chat_id;
    
    private $_migrate_from_chat_id;
    
    private $_pinned_message;


    public function getText() {
        return $this->_text;
    }
    
    public function setText($value) {
        $this->_text = $value;
    }
    
    /**
     * 
     * @return aki\type\User
     */
    public function getFrom(){
        return new User($this->_from);
    }
    
    public function setFrom($value) {
        $this->_from = $value;
    }
    
    /**
     * 
     * @return \aki\type\Chat
     */
    public function getChat() {
        return new Chat($this->_chat);
    }
    
    public function setChat($value) {
        $this->_chat = $value;
    }
    
    public function getForward_from() {
        return $this->_forward_from;
    }
    
    public function setForward_from($value) {
        $this->_forward_from = $value;
    }
    
    public function getForward_from_chat() {
        return $this->_forward_from_chat;
    }
    
    
    public function getForward_from_message_id() {
        return $this->_forward_from_message_id;
    }
    
    public function setForward_from_message_id($value) {
        $this->_forward_from_message_id = $value;
    }
    /**
     * 
     * @return \aki\type\PhotoSize
     */
    public function getPhotoSize() {
        return new PhotoSize($this->_photo);
    }
    
    public function setPhotoSize($value) {
        return $this->_photo = $value;
    }
    
    
    public function getForward_date() {
        return $this->_forward_date;
    }
    
    public function setForward_date($value) {
        $this->_forward_date = $value;
    }
    
    /**
     * 
     * @return \aki\type\Message
     */
    public function getReply_to_message() {
        return new Message($this->_reply_to_message);
    }
    
    public function setReply_to_message($value) {
        $this->_reply_to_message = $value;
    }
    
    public function getEdit_date() {
        return $this->_edit_date;
    }
    
    public function setEdit_date($value) {
        $this->_edit_date = $value;
    }
    
    /**
     * 
     * @return \aki\type\MessageEntity
     */
    public function getEntities() {
        return new MessageEntity($this->_entities);
    }
    
    public function setEntities($value) {
        $this->_entities = $value;
    }
    
    /**
     * 
     * @return \aki\type\Audio
     */
    public function getAudio() {
        return new Audio($this->_audio);
    }
    
    public function setAudio($value) {
        $this->_audio = $value;
    }
    
    /**
     * 
     * @return \aki\type\Document
     */
    public function getDocument() {
        return new Document($this->_document);
    }
    
    public function setDocument($value) {
        $this->_document = $value;
    }
    
    /**
     * 
     * @return \aki\type\Game
     */
    public function getGame() {
        return new Game($this->_game);
    }
    
    public function setGame($value) {
        $this->_game = $value;
    }
    /**
     * 
     * @return type
     */
    public function getPhoto(){
        return [new PhotoSize($this->_photo)];
    }
    
    public function setPohto($value) {
        $this->_photo = $value;
    }
    
    /**
     * 
     * @return \aki\type\Video
     */
    public function getVideo() {
        return new Video($this->_video);
    }
    
    public function setVideo($value) {
        $this->_video = $value;
    }
    
    /**
     * 
     * @return \aki\type\Voice
     */
    public function getVoice() {
        return new Voice($this->_voice);
    }
    
    public function setVoice($value) {
        $this->_voice = $value;
    }
    
    public function getCaption() {
        return $this->_caption;
    }
    
    public function setCaption($value) {
        $this->_caption = $value;
    }
    
    /**
     * 
     * @return \aki\type\Contact
     */
    public function getContact() {
        return new Contact($this->_contact);
    }
    
    public function setContact($value) {
        $this->_contact = $value;
    }
    
    /**
     * 
     * @return \aki\type\Location
     */
    public function getLocation() {
        return new Location($this->_location);
    }
    
    public function setLocation($value) {
        $this->_location = $value;
    }
    
    /**
     * 
     * @return \aki\type\Venue
     */
    public function getVenue() {
        return new Venue($this->_venue);
    }
    
    public function setVenue($value) {
        $this->_venue = $value;
    }
    
    /**
     * 
     * @return \aki\type\User
     */
    public function getNew_chat_member() {
        return new User($this->_new_chat_member);
    }
    
    public function setNew_chat_member($value) {
        $this->_new_chat_member = $value;
    }
    
    /**
     * 
     * @return \aki\type\User
     */
    public function getLeft_chat_member() {
        return new User($this->_left_chat_member);
    }
    
    public function setLeft_chat_member($value) {
        $this->_left_chat_member = $value;
    }
    
    public function getNew_chat_title() {
        return $this->_new_chat_title;
    }
    
    public function setNew_chat_title($value) {
        $this->_new_chat_title = $value;
    }
    
    public function getDelete_chat_photo(){
        return $this->_delete_chat_photo;
    }
    
    public function setDelete_chat_photo($value) {
        $this->_delete_chat_photo = $value;
    }
    
    public function getGroup_chat_created() {
        return $this->_group_chat_created;
    }
    
    public function setGroup_chat_created($value) {
        $this->_group_chat_created = $value;
    }
    
    public function getSupergroup_chat_created() {
        return $this->_supergroup_chat_created;
    }
    
    public function setSupergroup_chat_created($value) {
        $this->_supergroup_chat_created = $value;
    }
    
    public function getChannel_chat_created() {
        return $this->_channel_chat_created;
    }
    
    public function setChannel_chat_created($value) {
        $this->_channel_chat_created = $value;
    }
    
    public function getMigrate_to_chat_id() {
        return $this->_migrate_to_chat_id;
    }
    
    public function setMigrate_to_chat_id($value) {
        $this->_migrate_to_chat_id = $value;
    }
    
    public function getMigrate_from_chat_id() {
        return $this->_migrate_from_chat_id;
    }
    
    public function setMigrate_from_chat_id($value) {
        $this->_migrate_from_chat_id = $value;
    }
    
    /**
     * 
     * @return \aki\type\Message
     */
    public function getPinned_message() {
        return new Message($this->_pinned_message);
    }
    
    public function setPinned_message($value) {
        $this->_pinned_message = $value;
    }
}


