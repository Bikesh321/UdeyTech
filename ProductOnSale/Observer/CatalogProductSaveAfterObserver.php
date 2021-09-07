<?php

namespace UdeyTech\ProductOnSale\Observer;

class CatalogProductSaveAfterObserver implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var \UdeyTech\ProductOnSale\Model\OnSale
     */
    protected $productOnSale;

    /**
     * @param \UdeyTech\ProductOnSale\Model\OnSale $productOnSale
     */
    public function __construct(
        \UdeyTech\ProductOnSale\Model\OnSale $productOnSale
    ) {
        $this->productOnSale = $productOnSale;
    }

    /**
     * Set the value to the product attribute named on_sale
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();
        $this->productOnSale->setParentProductsToOnSale($product->getId());
    }
}
