<?php

namespace UdeyTech\LoginAsCustomer\Model\ResourceModel\Login;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('UdeyTech\LoginAsCustomer\Model\Login', 'UdeyTech\LoginAsCustomer\Model\ResourceModel\Login');
    }
}
