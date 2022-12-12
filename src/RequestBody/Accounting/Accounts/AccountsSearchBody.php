<?php

namespace Aesislabs\BexioConnector\RequestBody\Accounting\Accounts;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBody;

class AccountsSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = AccountsSearchBodyItem::class;
}
