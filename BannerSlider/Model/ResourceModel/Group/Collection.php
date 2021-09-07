<?php


namespace UdeyTech\BannerSlider\Model\ResourceModel\Group;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('UdeyTech\BannerSlider\Model\Group', 'UdeyTech\BannerSlider\Model\ResourceModel\Group');
    }
}
