<?php
class Smart_FreeHemming_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @return boolean
     */
    public function getFreeHemmingAttribute($_product){
        return Mage::getModel('freehemming/hemmingattribute')->getCatHemmingAttribute($_product);
    }
}