<?php
class Mage_Adminhtml_Model_System_Config_Source_Browser
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
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('Firefox (Desktop)')),
            array('value' => 3, 'label'=>Mage::helper('adminhtml')->__('Chrome (Desktop)')),
        );
    }

}
