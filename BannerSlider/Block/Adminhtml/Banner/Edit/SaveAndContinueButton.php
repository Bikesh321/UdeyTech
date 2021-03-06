<?php

namespace UdeyTech\BannerSlider\Block\Adminhtml\Banner\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;


class SaveAndContinueButton extends GenericButton implements ButtonProviderInterface
{
  
    public function getButtonData()
    {
        $data = [];
        if ($this->_isAllowedAction('UdeyTech_BannerSlider::banner_create') || $this->_isAllowedAction('UdeyTech_BannerSlider::banner_update')) {
            $data = [
                'label' => __('Save and Continue Edit'),
                'class' => 'save',
                'data_attribute' => [
                    'mage-init' => [
                        'button' => ['event' => 'saveAndContinueEdit'],
                    ],
                ],
                'sort_order' => 80,
            ];
        }
        return $data;
    }
}
