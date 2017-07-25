<?php
$installer = $this;
$installer->startSetup();
try {
    $installer->addAttribute('catalog_category', 'free_hemming', array(
        'group' => 'General',
        'input' => 'select',
        'type' => 'int',
        'label' => 'Free Hemming',
        'visible' => 1,
        'required' => 0,
        'user_defined' => 1,
        'source' => 'eav/entity_attribute_source_boolean',
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    ));
} catch (Exception $e) {
    Mage::logException($e);
}
$installer->endSetup();