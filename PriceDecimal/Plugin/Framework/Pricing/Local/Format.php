<?php

namespace UdeyTech\PriceDecimal\Plugin\Framework\Pricing\Local;

class Format
{
    /**
     * @var \UdeyTech\PriceDecimal\Helper\Data
     */
    protected $priceDecimalHelperData;

    /**
     * @param \UdeyTech\PriceDecimal\Helper\Data $priceDecimalHelperData
     */
    public function __construct(
        \UdeyTech\PriceDecimal\Helper\Data $priceDecimalHelperData
    ) {
        $this->priceDecimalHelperData = $priceDecimalHelperData;
    }

    /**
     * {@inheritdoc}
     *
     * @param \Magento\Framework\Locale\FormatInterface $subject
     * @param array $result
     *
     * @return array
     */
    public function afterGetPriceFormat(
        \Magento\Framework\Locale\FormatInterface $subject,
        $result
    ) {
        if ($this->priceDecimalHelperData->isEnable()) {
            if ($this->priceDecimalHelperData->showDecimal()) {
                $precision = $this->priceDecimalHelperData->getDecimalLength();
                $result['precision'] = $precision;
                $result['requiredPrecision'] = $precision;
            } else {
                $precision = 0;
                $result['precision'] = $precision;
                $result['requiredPrecision'] = $precision;
            }
        }

        return $result;
    }
}
