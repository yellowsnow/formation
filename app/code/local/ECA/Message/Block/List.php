<?php
class ECA_Message_Block_List extends Mage_Core_Block_Template
{
    /**
     * Get Message collection
     *
     * @return ECA_Message_Model_Resource_Message_Collection
     *
     */
    public function getMessageCollection()
    {
        $messageModel = Mage::getModel('eca_message/message');
        $messageCollection = $messageModel->getCollection();
        $messageCollection->addFieldToFilter('id', array('gt' => 4));

        return $messageCollection;
    }
}