<?php
class ECA_Customer_Model_Observer extends Varien_Event_Observer
{
    public function logCustomer(Varien_Event_Observer $observer)
    {
        $event = $observer->getEvent();
        $customer = $event->getCustomer();
        /* @var $helper Mage_Core_Helper_Data */
        $helper = Mage::helper('core');

        $date = $helper->formatDate();
        $logString = $helper->__('%s logged in at %s', $customer->getName(), $date);
        Mage::log($logString, null, 'eca_customer.log', true);

        return $this;
    }
}