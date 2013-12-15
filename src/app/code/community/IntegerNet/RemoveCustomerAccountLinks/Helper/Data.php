<?php
/**
 * integer_net Magento Module
 *
 * @category    IntegerNet
 * @package     IntegerNet_RemoveCustomerAccountLinks
 * @copyright   Copyright (c) 2013 integer_net GmbH (http://www.integer-net.de/)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software Licence 3.0 (OSL-3.0)
 * @author      Christian Philipp <cp@integer-net.de>
 * @author      Viktor Franz <vf@integer-net.de>
 */

/**
 * Enter description here ...
 */
class IntegerNet_RemoveCustomerAccountLinks_Helper_Data extends Mage_Core_Helper_Abstract
{

    /**
     * @param mixed $store
     * @return array
     */
    public function getNavigationLinksToRemove($store = null)
    {
        $items = Mage::getStoreConfig('customer/integernet_removecustomeraccountlinks/items', $store);
        return explode(',', $items);
    }
}