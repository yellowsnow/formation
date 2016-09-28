<?php
class ECA_Message_Model_Resource_Message  extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('eca_message/message', 'id');
    }
}