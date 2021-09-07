<?php


namespace UdeyTech\BannerSlider\Model\ResourceModel;

class Group extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
 
    protected function _construct()
    {
        $this->_init('udeytech_banners_slider_group', 'id');
    }
}
