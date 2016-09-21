<?php
class TadeuRodrigues_GTmetrix_Block_Adminhtml_GTmetrix_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("gtmetrix_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("gtmetrix")->__("Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("gtmetrix")->__("Item Information"),
				"title" => Mage::helper("gtmetrix")->__("Item Information"),
				"content" => $this->getLayout()->createBlock("gtmetrix/adminhtml_gtmetrix_edit_tab_form")->toHtml(),
				));

				$this->addTab("resources", array(
				"label" => Mage::helper("gtmetrix")->__("Resources"),
				"title" => Mage::helper("gtmetrix")->__("Resources"),
				"content" => $this->getLayout()->createBlock("gtmetrix/adminhtml_gtmetrix_edit_tab_resources")->toHtml(),
				));

				$this->addTab("results", array(
				"label" => Mage::helper("gtmetrix")->__("Results"),
				"title" => Mage::helper("gtmetrix")->__("Results"),
				"content" => $this->getLayout()->createBlock("gtmetrix/adminhtml_gtmetrix_edit_tab_results")->toHtml(),
				));
				
				return parent::_beforeToHtml();
		}

}
