<?php

namespace Aesislabs\BexioConnector\RequestQuery\Purchase;

use Aesislabs\BexioConnector\RequestQuery\OrderLimitRequestQuery;

class BillsRequestQuery extends OrderLimitRequestQuery
{
    public const ORDER_BY_ID = 'id';
    private int $page = 0;
    protected $limit = 500;

    public function setPage(int $page)
    {
        $this->page = $page;
    }

    public function toArray(): array
    {
        $query = parent::toArray();

        if ($this->page > 0) {
            $query['page'] = $this->page;
        }
        return $query;
    }
}
