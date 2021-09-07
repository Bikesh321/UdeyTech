<?php

namespace UdeyTech\LoginAsCustomer\Model\ResourceModel;

class Login extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('udeytech_login_as_customer', 'login_id');
    }
}
