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
class IntegerNet_RemoveCustomerAccountLinks_Model_System_Source_Item
{
    /**
     * @return array
     */
    public function toOptionArray()
    {

        $options = array(array(
            'value' => '-',
            'label' => '',
        ));

        foreach($this->getLinks() as $link) {
            $options[] = array(
                'value' => $link->getName(),
                'label' => Mage::helper('customer')->__($link->getLabel()),
            );
        }

        return $options;
    }

    /**
     * Fetch all customer account navigation links from layout-block
     *
     * @return array of Varien_Object(s)
     */
    public function getLinks()
    {
        $links = array();

        /**
         * Save current store and design package
         */
        $currentStoreId = Mage::app()->getStore()->getId();
        $currentDesign = Mage::registry('_singleton/core/design_package');

        /**
         * Fetch all links from customer account navigation block
         */
        foreach (Mage::app()->getStores() as $store) {

            Mage::app()->setCurrentStore($store->getId());
            Mage::unregister('_singleton/core/design_package');

            /** @var $layout Mage_Core_Model_Layout */
            $layout = Mage::getModel('core/layout');
            $layout->getUpdate()->load('customer_account');
            $layout->generateXml();
            $layout->generateBlocks();

            /** @var $navigation Mage_Customer_Block_Account_Navigation */
            $navigation = $layout->getBlock('customer_account_navigation');

            if($navigation instanceof Mage_Customer_Block_Account_Navigation) {
                $storeNavigationLinks = $navigation->getLinks();
                $links = array_merge($links, $storeNavigationLinks);
            }
        }

        /**
         * Restore store and design package
         */
        Mage::app()->setCurrentStore($currentStoreId);
        Mage::unregister('_singleton/core/design_package');
        Mage::register('_singleton/core/design_package', $currentDesign);

        return $links;
    }
}
