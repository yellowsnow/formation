<?php
class ECA_Message_Model_Resource_Message_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('eca_message/message');
    }

    public function addCategoryFilter($categoryId)
    {
        $this->getSelect()->where('category_id = ?', $categoryId);
        return $this;
    }

    public function addActiveFilter() {}
}