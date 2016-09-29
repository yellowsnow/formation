<?php
class ECA_Message_Block_Adminhtml_Message_Edit_Tab_Main
    extends Mage_Adminhtml_Block_Widget_Form
    implements Mage_Adminhtml_Block_Widget_Tab_Interface
{
    protected function _prepareForm()
    {
        $model = Mage::registry('current_message');

        $form = new Varien_Data_Form(
            array('id' => 'edit_form', 'action' => $this->getData('action'), 'method' => 'post')
        );

        $form->setHtmlIdPrefix('message_');

        $fieldset = $form->addFieldset('base_fieldset', array('legend' => Mage::helper('eca_message')->__('General Information'), 'class' => 'fieldset-wide'));

        $fieldset->addField('title', 'text', array(
            'name'      => 'title',
            'label'     => Mage::helper('eca_message')->__('Message Title'),
            'title'     => Mage::helper('eca_message')->__('Message Title'),
            'required'  => true,
        ));

        $fieldset->addField('content', 'textarea', array(
            'name'      => 'content',
            'label'     => Mage::helper('eca_message')->__('Message Content'),
            'title'     => Mage::helper('eca_message')->__('Message Content'),
            'required'  => true,
        ));

        if ($model && $model->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));

            $form->setValues($model->getData());
        }

        $this->setForm($form);

        return parent::_prepareForm();
    }

    /**
     * Prepare label for tab
     *
     * @return string
     */
    public function getTabLabel()
    {
        return Mage::helper('eca_message')->__('Message Information');
    }

    /**
     * Prepare title for tab
     *
     * @return string
     */
    public function getTabTitle()
    {
        return Mage::helper('eca_message')->__('Message Information');
    }

    /**
     * Returns status flag about this tab can be shown or not
     *
     * @return true
     */
    public function canShowTab()
    {
        return true;
    }

    /**
     * Returns status flag about this tab hidden or not
     *
     * @return true
     */
    public function isHidden()
    {
        return false;
    }
}
