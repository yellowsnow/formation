<?php
class ECA_Message_Block_List extends Mage_Core_Block_Template
{
    public function getCacheLifetime()
    {
        return 3600;
    }

    public function getCacheTags()
    {
        $tags = parent::getCacheTags();
        $tags[] = 'message_list';

        return $tags;
    }

    public function getCacheKey()
    {
        $cacheKey = 'MESSAGE_LIST' . '_' .
                    'STORE_' . Mage::app()->getStore()->getId() . '_' .
                    'SECURE_' . (int) Mage::app()->getStore()->isCurrentlySecure() . '_' .
                    Mage::getDesign()->getPackageName() . '_' .
                    Mage::getDesign()->getTheme('template') . '_' .
                    'CATEGORY_ID_' . (int) $this->getCategoryId();

        return $cacheKey;
    }

    /**
     * Get Message collection
     *
     * @todo could be moved to helper
     * @return ECA_Message_Model_Resource_Message_Collection
     *
     */
    public function getMessageCollection()
    {
        $messageModel = Mage::getModel('eca_message/message');

        /* @var $messageCollection ECA_Message_Model_Resource_Message_Collection */
        $messageCollection = $messageModel->getCollection();

        $categoryId = $this->getCategoryId();
        if ($categoryId) {
            $messageCollection->addCategoryFilter($categoryId);
        }

        return $messageCollection;
    }

    public function getCategoryId()
    {
        $categoryId = Mage::registry('message_category_id');
        return $categoryId;
    }
}