<?php

namespace Aesislabs\BexioConnector\RequestBody\Other\Countries;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBodyItem;

class CountriesSearchBodyItem extends AbstractSearchBodyItem
{
    public const SEARCH_FIELD_NAME = 'name';
    public const SEARCH_FIELD_NAME_SHORT = 'name_short';
}
