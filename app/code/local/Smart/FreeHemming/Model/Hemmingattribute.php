<?php

class Smart_FreeHemming_Model_Hemmingattribute extends Mage_Core_Model_Abstract
{
    /**
     * @return boolean
     */
    public function getCatHemmingAttribute($_product){
        $catIds = $_product->getCategoryIds();
        $category = Mage::getModel('catalog/category')->getCollection()
            ->addAttributeToSelect(array(
                'free_hemming'
            ))
            ->addAttributeToFilter('entity_id', array('in'=>$catIds));

        foreach ($category as $id){
            $attribute = $id->getData('free_hemming');
            if($attribute == 1){
                return true;
                break;
            }
        }

        return false;
    }
}