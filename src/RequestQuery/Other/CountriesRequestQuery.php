<?php

namespace Aesislabs\BexioConnector\RequestQuery\Other;

use Aesislabs\BexioConnector\RequestQuery\OrderLimitRequestQuery;

class CountriesRequestQuery extends OrderLimitRequestQuery
{
    public const ORDER_BY_ID = 'id';
    public const ORDER_BY_NAME = 'name';
    public const ORDER_BY_NAME_SHORT = 'name_short';
}
