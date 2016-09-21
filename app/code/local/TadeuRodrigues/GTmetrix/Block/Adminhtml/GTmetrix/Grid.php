<?php

class TadeuRodrigues_GTmetrix_Block_Adminhtml_GTmetrix_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("gtmetrixGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("gtmetrix/gtmetrix")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("gtmetrix")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "id",
				));
                
				$this->addColumn("test_id", array(
				"header" => Mage::helper("gtmetrix")->__("Test ID"),
				"index" => "test_id",
				));
				$this->addColumn("poll_state_url", array(
				"header" => Mage::helper("gtmetrix")->__("Poll State Url"),
				"index" => "poll_state_url",
				));
				$this->addColumn("state", array(
				"header" => Mage::helper("gtmetrix")->__("State"),
				"index" => "state",
				));
				$this->addColumn("error", array(
				"header" => Mage::helper("gtmetrix")->__("Error"),
				"index" => "error",
				));
				$this->addColumn("report_url", array(
				"header" => Mage::helper("gtmetrix")->__("Report url"),
				"index" => "report_url",
				));
				$this->addColumn("pagespeed_score", array(
				"header" => Mage::helper("gtmetrix")->__("Pagespeed Score"),
				"index" => "pagespeed_score",
				));
				$this->addColumn("yslow_score", array(
				"header" => Mage::helper("gtmetrix")->__("Yslow Score"),
				"index" => "yslow_score",
				));
				$this->addColumn("html_bytes", array(
				"header" => Mage::helper("gtmetrix")->__("Html bytes"),
				"index" => "html_bytes",
				));
				$this->addColumn("html_load_time", array(
				"header" => Mage::helper("gtmetrix")->__("Html Load Time"),
				"index" => "html_load_time",
				));
				$this->addColumn("page_bytes", array(
				"header" => Mage::helper("gtmetrix")->__("Page bytes"),
				"index" => "page_bytes",
				));
				$this->addColumn("page_load_time", array(
				"header" => Mage::helper("gtmetrix")->__("Page Load Time"),
				"index" => "page_load_time",
				));
				$this->addColumn("page_elements", array(
				"header" => Mage::helper("gtmetrix")->__("Page Elements"),
				"index" => "page_elements",
				));
				$this->addColumn("screenshot", array(
				"header" => Mage::helper("gtmetrix")->__("Screenshot"),
				"index" => "screenshot",
				));
				$this->addColumn("har", array(
				"header" => Mage::helper("gtmetrix")->__("HAR"),
				"index" => "har",
				));
				$this->addColumn("pagespeed", array(
				"header" => Mage::helper("gtmetrix")->__("Pagespeed"),
				"index" => "pagespeed",
				));
				$this->addColumn("pagespeed_files", array(
				"header" => Mage::helper("gtmetrix")->__("Pagespeed Files"),
				"index" => "pagespeed_files",
				));
				$this->addColumn("yslow", array(
				"header" => Mage::helper("gtmetrix")->__("Yslow"),
				"index" => "yslow",
				));
				$this->addColumn("report_pdf", array(
				"header" => Mage::helper("gtmetrix")->__("Report PDF"),
				"index" => "report_pdf",
				));
				$this->addColumn("report_pdf_full", array(
				"header" => Mage::helper("gtmetrix")->__("Report PDF full"),
				"index" => "report_pdf_full",
				));
				$this->addColumn("video", array(
				"header" => Mage::helper("gtmetrix")->__("Video"),
				"index" => "video",
				));
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('id');
			$this->getMassactionBlock()->setFormFieldName('ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_gtmetrix', array(
					 'label'=> Mage::helper('gtmetrix')->__('Remove GTmetrix'),
					 'url'  => $this->getUrl('*/adminhtml_gtmetrix/massRemove'),
					 'confirm' => Mage::helper('gtmetrix')->__('Are you sure?')
				));
			return $this;
		}
			

}