<?php

namespace Aesislabs\BexioConnector\RequestBody\Sales\Invoices;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBody;

class InvoiceRemindersSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = InvoiceRemindersSearchBodyItem::class;
}
