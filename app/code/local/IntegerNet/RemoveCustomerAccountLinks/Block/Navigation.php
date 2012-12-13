<?php
/**
 * User: Christian Philipp
 * Date: 13.09.12
 * Time: 13:12
 * To change this template use File | Settings | File Templates.
 */

class IntegerNet_RemoveCustomerAccountLinks_Block_Navigation extends Mage_Customer_Block_Account_Navigation
{
    public function removeLink()
    {
        /*
         * hide account links choosen in backend configuration
         */

        $pages = Mage::getStoreConfig('removecustomeraccountlinks/settings/remove');
        $pagesArray = explode(',',$pages);

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