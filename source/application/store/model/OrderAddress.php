<?php

namespace app\store\model;

use app\common\model\OrderAddress as OrderAddressModel;

/**
 * 订单收货地址模型
 * Class OrderAddress
 * @package app\store\model
 */
class OrderAddress extends OrderAddressModel
{
  	public function profile()
    {
        return $this->hasOne('UserAddress')->field('address_id,car_tel,tname,tel');
    }
}
