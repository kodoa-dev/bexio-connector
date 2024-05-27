<?php

namespace Aesislabs\BexioConnector\RequestBody\Other\PaymentTypes;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBody;

class PaymentTypesSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = PaymentTypesSearchBodyItem::class;
}
