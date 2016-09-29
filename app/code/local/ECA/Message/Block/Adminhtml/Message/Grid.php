<?php
class ECA_Message_Block_Adminhtml_Message_Grid  extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('adminhtmlMessageGrid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $messageCollection = Mage::getModel('eca_message/message')->getCollection();
        $this->setCollection($messageCollection);

        parent::_prepareCollection();
        return $this;
    }

    protected function _prepareColumns()
    {
        $this->addColumn('id', array(
            'header' => $this->helper('eca_message')->__('Message Id'),
            'index'  => 'id',
            'align'  => 'left',
        ));

        $this->addColumn('title', array(
            'header' => $this->helper('eca_message')->__('Message Title'),
            'index'  => 'title',
            'align'  => 'left',
        ));

        $this->addColumn('content', array(
            'header' => $this->helper('eca_message')->__('Message Content'),
            'index'  => 'content',
            'align'  => 'right',
        ));

        $this->addColumn('category_id', array(
            'header' => $this->helper('eca_message')->__('Message Category'),
            'index'  => 'category_id',
            'align'  => 'right',
        ));

        parent::_prepareColumns();
        return $this;
    }

    public function getRowUrl($item)
    {
        return $this->getUrl('adminhtml/message_index/edit', array('id' => $item->getId()));
    }
}