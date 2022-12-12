<?php

namespace Aesislabs\BexioConnector\RequestBody\Contacts\AdditionalAddresses;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBody;

class AdditionalAddressesSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = AdditionalAddressesSearchBodyItem::class;
}
