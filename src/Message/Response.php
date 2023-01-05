<?php

namespace Omnipay\Voucher\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Response is successfull when we send status parameter which equals 200
 */
class Response extends AbstractResponse
{
    public function isSuccessful()
    {
        return isset($this->data['code']) && $this->data['code'] === 200;
    }
}
