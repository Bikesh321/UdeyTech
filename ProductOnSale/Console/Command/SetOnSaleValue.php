<?php


namespace UdeyTech\ProductOnSale\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SetOnSaleValue extends Command
{
    /**
     * @var \Magento\Framework\App\State
     */
    protected $appState;

    /**
     * @var \Magento\Catalog\Model\ProductFactory
     */
    protected $productFactory;

    /**
     * @param \Magento\Framework\App\State $appState
     * @param \Magento\Catalog\Model\ProductFactory $productFactory
     */
    public function __construct(
        \Magento\Framework\App\State $appState,
        \Magento\Catalog\Model\ProductFactory $productFactory
    ) {
        $this->appState = $appState;
        $this->productFactory = $productFactory;
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        // Set the name and description for the new CLI command
        $this->setName('catalog:product:attribute:on_sale')
            ->setDescription('Set the value to the product attribute on_sale');
    }

    /**
     * Execute the codes to generate the product URLs
     *
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // We must set the area code
        $this->appState->setAreaCode(\Magento\Framework\App\Area::AREA_GLOBAL);
        // Get all the stores view on your website
        $output->writeln('<info>Starting sets the value to the product attribute on_sale on each product</info>');
        // Get all the products
        $productCollection = $this->productFactory->create()->getCollection()->addAttributeToSelect(
            '*'
        );
        // Loop all products
        foreach ($productCollection as $product) {
            $output->writeln('<info>Start on the product named: '.$product->getName().'</info>');
            try {
                $product->save();
            } catch (\Exception $e) {}
        }
        $output->writeln('<info>Set the value to the product attribute on_sale on each product successful.</info>');
    }
}
