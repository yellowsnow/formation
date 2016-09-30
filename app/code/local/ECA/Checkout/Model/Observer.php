<?php
class ECA_Checkout_Model_Observer extends Varien_Event_Observer
{
    public function checkGuest(Varien_Event_Observer $observer)
    {
        $event = $observer->getEvent();

        $quote = $event->getQuote();
        $result = $event->getResult();
        $store = $event->getStore();

        $result->setIsAllowed(false);
        return $this;
    }
}