<?php
class TadeuRodrigues_GTmetrix_Block_Adminhtml_GTmetrix_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("gtmetrix_form", array("legend"=>Mage::helper("gtmetrix")->__("Item information")));

					
						$fieldset->addField("test_id", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Test ID"),
						"name" => "test_id",
						));
					
						$fieldset->addField("poll_state_url", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Poll State Url"),
						"name" => "poll_state_url",
						));
					
						$fieldset->addField("state", "text", array(
						"label" => Mage::helper("gtmetrix")->__("State"),
						"name" => "state",
						));
					
						$fieldset->addField("error", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Error"),
						"name" => "error",
						));
					

				if (Mage::getSingleton("adminhtml/session")->getGTmetrixData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getGTmetrixData());
					Mage::getSingleton("adminhtml/session")->setGTmetrixData(null);
				} 
				elseif(Mage::registry("gtmetrix_data")) {
				    $form->setValues(Mage::registry("gtmetrix_data")->getData());
				}
				return parent::_prepareForm();
		}
}
