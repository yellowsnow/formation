<?php
class ECA_Message_Block_Adminhtml_Message_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'eca_message';
        $this->_controller = 'adminhtml_message';
        parent::__construct();
    }

    public function getSaveUrl()
    {
        return $this->getUrl('adminhtml/message_index/save');
    }
}