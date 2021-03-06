<?php

namespace UdeyTech\CustomLogFile\Observer;

class CustomerLoginSuccess implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var \UdeyTech\CustomLogFile\Logger\Customer
     */
    protected $loggerCustomer;

    /**
     * @param \UdeyTech\CustomLogFile\Logger\Customer $loggerCustomer
     */
    public function __construct(
        \UdeyTech\CustomLogFile\Logger\Customer $loggerCustomer
    ) {
        $this->loggerCustomer = $loggerCustomer;
    }

    /**
     * Handler for 'customer_login' event.
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $customer = $observer->getEvent()->getCustomer();
        $this->loggerCustomer->info('Customer ID: '.$customer->getId().' has been logged in successfully!');
    }
}
