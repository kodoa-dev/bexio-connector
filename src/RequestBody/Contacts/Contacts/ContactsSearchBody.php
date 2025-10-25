<?php

namespace Aesislabs\BexioConnector\RequestBody\Contacts\Contacts;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBody;

class ContactsSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = ContactsSearchBodyItem::class;
}
