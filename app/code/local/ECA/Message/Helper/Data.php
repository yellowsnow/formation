<?php
class ECA_Message_Helper_Data extends Mage_Core_Helper_Data
{
    public function getSaveUrl()
    {
        return Mage::getUrl('eca_message/index/save');
    }

    /**
     * Get categories array
     *
     */
    public function getCategories()
    {
        return Mage::getModel('eca_message/category')->toOptionArray();
    }
}