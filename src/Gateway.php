<?php

namespace Omnipay\Voucher;

use Omnipay\Common\AbstractGateway;
use Omnipay\Voucher\src\Message\Request;

class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Voucher';
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest(Request::class, $parameters);
    }
}

