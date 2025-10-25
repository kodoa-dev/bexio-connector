<?php

namespace Aesislabs\BexioConnector\RequestBody\Items\StockAreas;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBodyItem;

class StockAreasSearchBodyItem extends AbstractSearchBodyItem
{
    public const SEARCH_FIELD_NAME = 'name';
    public const SEARCH_FIELD_STOCK_ID = 'stock_id';
}
