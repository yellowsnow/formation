<?php
class ECA_Catalog_Block_Seo_Sitemap_Product extends Mage_Catalog_Block_Seo_Sitemap_Product
{
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        $collection = $this->getCollection();
        $collection->addAttributeToSelect('description');
        $this->setCollection($collection);

        return $this;
    }
}