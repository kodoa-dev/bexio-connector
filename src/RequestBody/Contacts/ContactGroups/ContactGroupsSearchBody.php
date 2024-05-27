<?php

namespace Aesislabs\BexioConnector\RequestBody\Contacts\ContactGroups;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBody;

class ContactGroupsSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = ContactGroupsSearchBodyItem::class;
}
