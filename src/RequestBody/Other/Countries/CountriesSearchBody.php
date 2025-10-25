<?php

namespace Aesislabs\BexioConnector\RequestBody\Other\Countries;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBody;

class CountriesSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = CountriesSearchBodyItem::class;
}
