<?php

namespace Aesislabs\BexioConnector\Container\Accounting;

use Aesislabs\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ExchangeRate implements ContainerInterface
{
    /**
     * @var float
     * @SerializedName("factor_nr")
     * @Type("float")
     */
    protected $factorNr;

    /**
     * @var Currency
     * @SerializedName("exchange_currency")
     * @Type("Aesislabs\BexioConnector\Container\Accounting\Currency")
     */
    protected $exchangeCurrency;

    /**
     * @return float
     */
    public function getFactorNr(): float
    {
        return $this->factorNr;
    }

    /**
     * @return Currency
     */
    public function getExchangeCurrency(): Currency
    {
        return $this->exchangeCurrency;
    }
}
