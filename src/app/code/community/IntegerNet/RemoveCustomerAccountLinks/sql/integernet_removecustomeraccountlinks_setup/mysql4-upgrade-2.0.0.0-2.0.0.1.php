<?php
/**
 * integer_net Magento Module
 *
 * @category    IntegerNet
 * @package     IntegerNet_RemoveCustomerAccountLinks
 * @copyright   Copyright (c) 2013 integer_net GmbH (http://www.integer-net.de/)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software Licence 3.0 (OSL-3.0)
 * @author      Sylvain Rayé
 * @author      Viktor Franz <vf@integer-net.de>
 */

/**
 * Enter description here ...
 */

/* @var $installer Mage_Core_Model_Resource_Setup */
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$configTable = $this->getTable('core/config_data');
$oldConfigPath = 'removecustomeraccountlinks/settings/remove';
$newConfigPath = 'customer/integernet_removecustomeraccountlinks/items';

$query = sprintf("UPDATE %s SET path = '%s' WHERE path = '%s'", $configTable, $newConfigPath, $oldConfigPath);
$installer->getConnection()->query($query);

$installer->endSetup();