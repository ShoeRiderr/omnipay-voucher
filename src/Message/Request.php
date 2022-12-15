<?php
/**
 * Voucher Gateway Request
 */

namespace Omnipay\Voucher\Message;

use Omnipay\Common\Message\AbstractRequest;

/**
 * Voucher Gateway Request
 */
class Request extends AbstractRequest
{
    public function getData()
    {
        $this->validate('amount');

        return $this->getParameters();
    }

    public function sendData($data)
    {
        return $this->response = new Response($this, $data);
    }
}
