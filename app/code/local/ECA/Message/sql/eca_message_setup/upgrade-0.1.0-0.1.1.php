<?php
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

/* @var $adapter Varien_Db_Adapter_Pdo_Mysql */
$adapter = $installer->getConnection();

$adapter->addColumn($installer->getTable('eca_message/message'),
    'category_id',
    'int(10) unsigned NULL default NULL');

$installer->endSetup();