<?php

class Poli_Polipay_Model_Receipt extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('polipay/receipt');
    }
}