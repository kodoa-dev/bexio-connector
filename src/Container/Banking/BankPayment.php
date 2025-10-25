<?php

namespace Aesislabs\BexioConnector\Container\Banking;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class BankPayment extends AbstractBankPayment
{
    /**
     * @var IBANPayment
     * @SerializedName("payment")
     * @Type("IBANPayment")
     */
    protected $payment;

    /**
     * @return IBANPayment
     */
    public function getPayment(): IBANPayment
    {
        return $this->payment;
    }
}
