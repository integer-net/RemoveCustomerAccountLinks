<?php
class IntegerNet_RemoveCustomerAccountLinks_Model_System_Source_Item
{
    public function toOptionArray()
    {
        /**
         * get version and show account links in system->configuration->customers
         */
        $options = array();
        $fullVersionNumber = Mage::getVersionInfo();

        $versionCode = 'removecustomeraccountlinks/version_link/v1' . $fullVersionNumber['minor'] . '/item/name';
        $versionLabel = 'removecustomeraccountlinks/version_link/v1' . $fullVersionNumber['minor'] . '/item/label';

        $pagesCode = Mage::getStoreConfig($versionCode);
        $pagesLabel = Mage::getStoreConfig($versionLabel);

        $pagesCodeArray = explode(',', $pagesCode);
        $pagesLabelArray = explode(',', $pagesLabel);


        $arraySize = sizeof($pagesCodeArray);
        for ($c=0; $c < $arraySize; $c++) {
            $labelArray = explode(':',$pagesLabelArray[$c]);

            if (sizeof($labelArray)>1){
                $translateHelper = $labelArray[0];
                $label = $labelArray[1];
            }
            else {
                $translateHelper = 'customer';
                $label = $labelArray[0];
            }

            $options[$c] = array(
                'value' => $pagesCodeArray[$c],
                'label' => Mage::helper($translateHelper)->__($label)
            );
        }

        return $options;
    }
}
