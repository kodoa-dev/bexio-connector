<?php

namespace Aesislabs\BexioConnector\RequestBody\Contacts\Titles;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBody;

class TitlesSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = TitlesSearchBodyItem::class;
}
