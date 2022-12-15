<?php
/**
 * Voucher Gateway Response
 */

namespace Omnipay\Voucher\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Voucher Gateway Response
 */
class Response extends AbstractResponse
{
    public function isSuccessful()
    {
        return true;
    }
}
