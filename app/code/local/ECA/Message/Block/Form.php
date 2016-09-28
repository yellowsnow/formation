<?php
class ECA_Message_Block_Form extends Mage_Core_Block_Template
{
    /**
     * Hello World test function
     *
     * @return string
     */
    public function getHelloWorld()
    {
        return $this->__('Hello World !');
    }

    /**
     * Get save url
     *
     * @return string
     */
    public function getSaveUrl()
    {
        return $this->getUrl('eca_message/index/save');
    }
}