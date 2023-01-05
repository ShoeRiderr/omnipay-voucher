<?php

namespace Omnipay\Voucher\Message;

use Omnipay\Common\Message\AbstractRequest;

class Request extends AbstractRequest
{
    public function getData()
    {
        return $this->getParameters();
    }

    public function setStatus($status)
    {
        $this->parameters->set('status', $status);
    }

    public function sendData($data)
    {
        return $this->response = new Response($this, $data);
    }
}
