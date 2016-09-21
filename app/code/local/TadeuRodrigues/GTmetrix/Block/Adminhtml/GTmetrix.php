<?php


class TadeuRodrigues_GTmetrix_Block_Adminhtml_GTmetrix extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_gtmetrix";
	$this->_blockGroup = "gtmetrix";
	$this->_headerText = Mage::helper("gtmetrix")->__("GTmetrix Manager");
	$this->_addButtonLabel = Mage::helper("gtmetrix")->__("Add New Item");
	parent::__construct();
	
	}

}