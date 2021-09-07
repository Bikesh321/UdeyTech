var config = {
    'config': {
        'mixins': {
            'Magento_Checkout/js/view/shipping': {
                'UdeyTech_HotDeals/js/view/shipping-payment-mixin': true
            },
            'Magento_Checkout/js/view/payment': {
                'UdeyTech_HotDeals/js/view/shipping-payment-mixin': true
            }
        }
    }
}
