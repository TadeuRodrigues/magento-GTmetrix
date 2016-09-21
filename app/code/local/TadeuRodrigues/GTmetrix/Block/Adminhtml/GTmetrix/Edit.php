<?php
	
class TadeuRodrigues_GTmetrix_Block_Adminhtml_GTmetrix_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "id";
				$this->_blockGroup = "gtmetrix";
				$this->_controller = "adminhtml_gtmetrix";
				$this->_updateButton("save", "label", Mage::helper("gtmetrix")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("gtmetrix")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("gtmetrix")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("gtmetrix_data") && Mage::registry("gtmetrix_data")->getId() ){

				    return Mage::helper("gtmetrix")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("gtmetrix_data")->getId()));

				} 
				else{

				     return Mage::helper("gtmetrix")->__("Add Item");

				}
		}
}