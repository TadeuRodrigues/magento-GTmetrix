<?php
class TadeuRodrigues_GTmetrix_Block_Adminhtml_GTmetrix_Edit_Tab_Resources extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("resources", array("legend"=>Mage::helper("gtmetrix")->__("Resources")));
					
						$fieldset->addField("screenshot", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Screenshot"),
						"name" => "screenshot",
						));
					
						$fieldset->addField("har", "text", array(
						"label" => Mage::helper("gtmetrix")->__("HAR"),
						"name" => "har",
						));
					
						$fieldset->addField("pagespeed", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Pagespeed"),
						"name" => "pagespeed",
						));
					
						$fieldset->addField("pagespeed_files", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Pagespeed Files"),
						"name" => "pagespeed_files",
						));
					
						$fieldset->addField("yslow", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Yslow"),
						"name" => "yslow",
						));
					
						$fieldset->addField("report_pdf", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Report PDF"),
						"name" => "report_pdf",
						));
					
						$fieldset->addField("report_pdf_full", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Report PDF full"),
						"name" => "report_pdf_full",
						));
					
						$fieldset->addField("video", "text", array(
						"label" => Mage::helper("gtmetrix")->__("Video"),
						"name" => "video",
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
