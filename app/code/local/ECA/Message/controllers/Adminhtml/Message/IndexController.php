<?php
class ECA_Message_Adminhtml_Message_IndexController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function newAction()
    {
        $this->_forward('edit');
    }

    public function editAction()
    {
        $messageId = $this->getRequest()->getParam('id');
        $message = Mage::getModel('eca_message/message')->load($messageId);
        Mage::register('current_message', $message);
        $this->loadLayout();
        $this->renderLayout();
    }

    public function saveAction()
    {
        $post = $this->getRequest()->getPost();
        Zend_Debug::dump($post);
        /* @todo implement save logic + _redirect (same as frontend) */
    }
}