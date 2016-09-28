<?php
class ECA_Message_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * Route : eca_message/index/new
     *
     */
    public function newAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * Save message action
     *
     */
    public function saveAction()
    {
        if ($post = $this->getRequest()->getPost()) {
            $testData = array('title' => 'test');
            Mage::getModel('eca_message/message')->addData($testData)->save();
        }
    }
}