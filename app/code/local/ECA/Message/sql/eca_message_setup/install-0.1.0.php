<?php
/** @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

/** @var $adapter Varien_Db_Adapter_Pdo_Mysql */
$adapter = $installer->getConnection();

/**
 * Create table 'eca_message/message'
 */
$table = $adapter->newTable($installer->getTable('eca_message/message'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity' => true,
        'unsigned' => true,
        'nullable' => false,
        'primary'  => true,
    ), 'Message ID')
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_VARCHAR,
        255, array('nullable'  => false), 'Title')
    ->addColumn('content', Varien_Db_Ddl_Table::TYPE_TEXT,
        '64k', array('nullable'  => false), 'Content');
$adapter->createTable($table);

$installer->endSetup();
