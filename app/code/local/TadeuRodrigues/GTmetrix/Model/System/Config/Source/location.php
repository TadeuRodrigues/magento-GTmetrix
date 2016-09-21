<?php
class TadeuRodrigues_Gtmetrix_Model_System_Config_Source_Location
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
		
            array('value' => 0, 'label'=>Mage::helper('adminhtml')->__('Default')),
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('Vancouver, Canada')),
            array('value' => 2, 'label'=>Mage::helper('adminhtml')->__('London, UK')),
            array('value' => 3, 'label'=>Mage::helper('adminhtml')->__('Sydney, Australia')),
            array('value' => 4, 'label'=>Mage::helper('adminhtml')->__('Dallas, USA')),
            array('value' => 5, 'label'=>Mage::helper('adminhtml')->__('Mumbai, India')),
            array('value' => 6, 'label'=>Mage::helper('adminhtml')->__('Sao Paulo, Brazil')),
        );
    }

}
