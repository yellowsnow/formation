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
        /* @var $messageCollection ECA_Message_Model_Resource_Message_Collection */
        $messageCollection = $messageModel->getCollection();
        $categoryId = Mage::registry('message_category_id');
        if ($categoryId) {
            $messageCollection->addFieldToFilter('category_id', $categoryId);
        }

        return $messageCollection;
    }
}