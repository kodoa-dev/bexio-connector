<?php

namespace Aesislabs\BexioConnector\RequestBody\Contacts\ContactRelations;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBody;

class ContactRelationsSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = ContactRelationsSearchBodyItem::class;
}
