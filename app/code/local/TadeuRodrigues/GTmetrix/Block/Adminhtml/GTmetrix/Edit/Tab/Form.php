<?php
class TadeuRodrigues_GTmetrix_Block_Adminhtml_GTmetrix_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("gtmetrix_form", array("legend"=>Mage::helper("gtmetrix")->__("Item information")));

				
						$fieldset->addField("id", "text", array(
						"label" => Mage::helper("gtmetrix")->__("ID"),
						"name" => "id",
						));
					
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
