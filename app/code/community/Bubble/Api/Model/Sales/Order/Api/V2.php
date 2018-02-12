<?php
class Bubble_Api_Model_Sales_Order_Api_V2 extends Mage_Sales_Model_Order_Api
{

    public function info($orderIncrementId)
    {
        $result = parent::info($orderIncrementId);
        $order = parent::_initOrder($orderIncrementId);

        if ($order->getBaseGiftVoucherDiscount() > 0) {
            $result['base_gift_voucher_discount'] = $order->getBaseGiftVoucherDiscount();
        }
        if ($order->getBaseCodFee() > 0){
            $result['base_cod_fee'] =  $order->getBaseCodFee();
        }
        
        return $result;
        
    }
}