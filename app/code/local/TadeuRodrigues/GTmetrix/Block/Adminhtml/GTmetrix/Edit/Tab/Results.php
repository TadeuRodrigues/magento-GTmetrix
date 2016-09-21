<?php
class TadeuRodrigues_GTmetrix_Block_Adminhtml_GTmetrix_Edit_Tab_Results extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("gtmetrix_form", array("legend"=>Mage::helper("gtmetrix")->__("Item information")));

					
						$fieldset->addField("report_url", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Report url"),
						"name" => "report_url",
						));
					
						$fieldset->addField("pagespeed_score", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Pagespeed Score"),
						"name" => "pagespeed_score",
						));
					
						$fieldset->addField("yslow_score", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Yslow Score"),
						"name" => "yslow_score",
						));
					
						$fieldset->addField("html_bytes", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Html bytes"),
						"name" => "html_bytes",
						));
					
						$fieldset->addField("html_load_time", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Html Load Time"),
						"name" => "html_load_time",
						));
					
						$fieldset->addField("page_bytes", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Page bytes"),
						"name" => "page_bytes",
						));
					
						$fieldset->addField("page_load_time", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Page Load Time"),
						"name" => "page_load_time",
						));
					
						$fieldset->addField("page_elements", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Page Elements"),
						"name" => "page_elements",
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
