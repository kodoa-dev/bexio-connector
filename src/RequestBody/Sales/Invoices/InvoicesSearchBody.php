<?php

namespace Aesislabs\BexioConnector\RequestBody\Sales\Invoices;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBody;

class InvoicesSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = InvoicesSearchBodyItem::class;
}
