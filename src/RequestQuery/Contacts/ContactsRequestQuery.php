<?php

namespace Aesislabs\BexioConnector\RequestQuery\Contacts;

use Aesislabs\BexioConnector\RequestQuery\OrderLimitRequestQuery;

class ContactsRequestQuery extends OrderLimitRequestQuery
{
    public const ORDER_BY_ID = 'id';
    public const ORDER_BY_NR = 'nr';
    public const ORDER_BY_NAME1 = 'name_1';
    public const ORDER_BY_UPDATED_AT = 'updated_at';
}
