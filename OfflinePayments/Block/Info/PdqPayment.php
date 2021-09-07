<?php

namespace UdeyTech\OfflinePayments\Block\Info;

class PdqPayment extends \Magento\Payment\Block\Info
{
    /**
     * @var string
     */
    protected $_template = 'UdeyTech_OfflinePayments::info/pdqpayment.phtml';

    /**
     * @return string
     */
    public function toPdf()
    {
        $this->setTemplate('UdeyTech_OfflinePayments::info/pdf/pdqpayment.phtml');
        return $this->toHtml();
    }
}
