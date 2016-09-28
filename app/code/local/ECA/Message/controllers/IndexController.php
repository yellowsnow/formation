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
        $post = $this->getRequest()->getPost();
        Zend_Debug::dump($post);
    }
}