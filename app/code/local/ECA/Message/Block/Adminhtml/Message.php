<?php
class ECA_Message_Block_Adminhtml_Message
extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_message';
        $this->_blockGroup = 'eca_message';
        $this->_headerText = $this->helper('eca_message')->__('Manage messages');
        parent::__construct();
//        $this->removeButton('add');
    }
}