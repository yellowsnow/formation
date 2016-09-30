<?php
class ECA_Catalog_Model_Product_Status extends Mage_Catalog_Model_Product_Status
{
    public function getVisibleStatusIds()
    {
        return array(self::STATUS_ENABLED, self::STATUS_DISABLED);
    }
}