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
class IntegerNet_RemoveCustomerAccountLinks_Block_Navigation extends Mage_Customer_Block_Account_Navigation
{
    /**
     * @return $this
     */
    public function removeLink($name)
    {
        foreach (Mage::helper('integernet_removecustomeraccountlinks')->getNavigationLinksToRemove() as $link) {
            unset($this->_links[$link]);
        }

        return $this;
    }

    /**
     * @return mixed
     */
    protected function _toHtml()
    {
        $this->removeLink();
        return parent::_toHtml();
    }
}
