<?php
class ECA_Checkout_Block_Cart_Minicart extends Mage_Checkout_Block_Cart_Abstract
{
    public function getSummaryCount()
    {
        if ($this->getData('summary_qty')) {
            return $this->getData('summary_qty');
        }
        return Mage::getSingleton('checkout/cart')->getSummaryQty()+10;
    }
}