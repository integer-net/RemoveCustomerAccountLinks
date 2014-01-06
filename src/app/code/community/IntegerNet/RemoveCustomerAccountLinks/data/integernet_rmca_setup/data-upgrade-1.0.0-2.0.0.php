<?php
/**
 * integer_net Magento Module
 *
 * @category    IntegerNet
 * @package     IntegerNet_RemoveCustomerAccountLinks
 * @copyright   Copyright (c) 2013 integer_net GmbH (http://www.integer-net.de/)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software Licence 3.0 (OSL-3.0)
 * @author      Sylvain Rayé
 */

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$query = "UPDATE " . $this->getTable('core/config_data') . " SET path=REPLACE(path,'removecustomeraccountlinks/settings/remove','customer/integernet_removecustomeraccountlinks/items') WHERE path LIKE '%removecustomeraccountlinks/settings/remove%'";
$installer->getConnection()->query($query);

$installer->endSetup();

