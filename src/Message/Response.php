<?php

namespace Omnipay\Voucher\Message;

use Omnipay\Common\Message\AbstractResponse;

class Response extends AbstractResponse
{
    public function isSuccessful()
    {
        return isset($this->data['code']) && $this->data['code'] === 200;
    }
}
