<?php
class ECA_Message_Model_Category extends Mage_Core_Model_Abstract
{
    public function toOptionArray()
    {
        return array(
            array(
                'label' => Mage::helper('eca_message')->__('Category 1'),
                'value' => 1
            ),
            array(
                'label' => Mage::helper('eca_message')->__('Category 2'),
                'value' => 2
            ),
            array(
                'label' => Mage::helper('eca_message')->__('Category 3'),
                'value' => 3
            ),
        );
    }
}