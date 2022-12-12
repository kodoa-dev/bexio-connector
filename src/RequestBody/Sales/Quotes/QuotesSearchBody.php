<?php

namespace Aesislabs\BexioConnector\RequestBody\Sales\Quotes;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBody;

class QuotesSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = QuotesSearchBodyItem::class;
}
