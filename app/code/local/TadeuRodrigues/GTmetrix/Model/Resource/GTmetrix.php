<?php
class TadeuRodrigues_GTmetrix_Model_Resource_GTmetrix extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init("gtmetrix/gtmetrix", "id");
        $this->_read = $this->_getReadAdapter();
        $this->_write = $this->_getWriteAdapter();
    }
}