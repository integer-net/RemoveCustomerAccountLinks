<?php

/**
 *
 * @category    IntegerNet
 * @package     IntegerNet_RemoveCustomerAccountLinks
 * @author      Christian Philipp <cp@integer-net.de>
 */
class IntegerNet_RemoveCustomerAccountLinks_Block_Navigation extends Mage_Customer_Block_Account_Navigation
{


    public function removeLink()
    {
        /*
         * hide account links choosen in backend configuration
         */

        $pages = Mage::getStoreConfig(IntegerNet_RemoveCustomerAccountLinks_Helper_Data::XML_PATH_REMOVECUSTOMERACCOUNTLINKS_SETTINGS_REMOVE);
        $pagesArray = explode(',', $pages);

        foreach ($pagesArray as $name) {
            unset($this->_links[$name]);
        }

        return $this;
    }


    protected function _toHtml()
    {
        $this->removeLink();
        return parent::_toHtml();
    }
}