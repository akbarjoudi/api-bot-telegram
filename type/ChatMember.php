<?php
namespace aki\type;

use aki\base\Type;
/**
 * Description of User
 *
 * @author Akbar Joudi <akbar.joody@gmail.com>
 */
class ChatMember extends Type{
    
    private $_user;

    private $_status;

    private $_until_date;

    private $_can_be_edited;

    private $_can_change_info;

    private $_can_post_messages;

    private $_can_edit_messages;

    private $_can_delete_messages;

    private $_can_invite_users;

    private $_can_restrict_members;

    private $_can_pin_messages;

    private $_can_promote_members;

    private $_can_send_messages;

    private $_can_send_media_messages;

    private $_can_send_other_messages;

    private $_can_add_web_page_previews;


    public function getUser()
    {
    	return new User($this->_user);
    }

    public function getStatus()
    {
    	return $this->_status;
    }

	public function getUntil_date()
    {
    	return $this->_until_date;
    } 

    public function getCan_be_edited()
    {
    	return $this->_can_be_edited;
    }

    public function getCan_change_info()
    {
    	return $this->_can_be_edited;
    }

	public function getCan_post_messages()
    {
    	return $this->_can_post_messages;
    }       

    public function getCan_edit_messages()
    {
    	return $this->_can_edit_messages;
    }

    public function getCan_delete_messages()
    {
    	return $this->_can_delete_messages;
    }

    public function getCan_invite_users()
    {
    	return $this->_can_invite_users;
    }

    public function getCan_restrict_members()
    {
    	return $this->_can_restrict_members;
    }

    public function getCan_pin_messages()
    {
    	return $this->_can_pin_messages;
    }

    public function getCan_promote_members()
    {
    	return $this->_can_promote_members;
    }

    public function getCan_send_messages()
    {
    	return $this->_can_send_messages;
    }

    public function getCan_send_media_messages()
    {
    	return $this->_can_send_media_messages;
    }

    public function getCan_send_other_messages()
    {
    	return $this->_can_send_other_messages;
    }

    public function getCan_add_web_page_previews()
    {
    	return $this->_can_add_web_page_previews;
    }
}
