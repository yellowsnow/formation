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
     * Get session
     *
     * @return Mage_Core_Model_Session
     */
    protected function _getSession()
    {
        return Mage::getSingleton('core/session');
    }

    /**
     * Get helper
     *
     * @return ECA_Message_Helper_Data
     */
    protected function _getHelper()
    {
        return Mage::helper('eca_message');
    }

    /**
     * Save message action
     *
     */
    public function saveAction()
    {
        if ($post = $this->getRequest()->getPost()) {
            $helper = $this->_getHelper();

            try {
                if (empty($post['title']) || empty($post['content'])) {
                    throw new Exception($helper->__('Invalid data.'));
                }

                $messageModel = Mage::getModel('eca_message/message');
                $messageModel->addData($post);
                $messageModel->save();

                $successMessage = $helper->__('Message successfully saved.');
                $this->_getSession()->addSuccess($successMessage);
                $this->_redirect('*/*/list');
            } catch (Exception $e) {
                $errorMessage = $helper->__('An error occured.');
                $this->_getSession()->addError($errorMessage);
                Mage::log($e->getMessage(), null, 'eca_message.log', true);
                $this->_redirect('*/*/new');
            }
        }
    }

    public function listAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}