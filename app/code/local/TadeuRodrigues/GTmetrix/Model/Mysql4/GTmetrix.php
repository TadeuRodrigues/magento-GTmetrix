<?php
class TadeuRodrigues_GTmetrix_Model_Mysql4_GTmetrix extends TadeuRodrigues_GTmetrix_Model_Resource_GTmetrix
{
    protected function _construct()
    {
        $this->_init("gtmetrix/gtmetrix", "id");
    }
}