<?php
class ECA_Catalog_Helper_Product extends Mage_Catalog_Helper_Product
{
    public function canShow($product, $where = 'catalog')
    {
        if (!Mage::getStoreConfigFlag('catalog/seo/show_disabled_products')) {
            return parent::canShow($product, $where);
        }

        if (is_int($product)) {
            $product = Mage::getModel('catalog/product')->load($product);
        }

        /* @var $product Mage_Catalog_Model_Product */
        if (!$product->getId()) {
            return false;
        }

        return $product->isVisibleInSiteVisibility();
    }
}