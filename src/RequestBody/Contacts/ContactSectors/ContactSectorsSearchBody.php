<?php

namespace Aesislabs\BexioConnector\RequestBody\Contacts\ContactSectors;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBody;

class ContactSectorsSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = ContactSectorsSearchBodyItem::class;
}
