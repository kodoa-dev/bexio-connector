<?php

namespace Aesislabs\BexioConnector\RequestBody\Contacts\ContactRelations;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBodyItem;

class ContactRelationsSearchBodyItem extends AbstractSearchBodyItem
{
    public const SEARCH_FIELD_CONTACT_ID = 'contact_id';
    public const SEARCH_FIELD_CONTACT_SUB_ID = 'contact_sub_id';
    public const SEARCH_FIELD_UPDATE_AT = 'updated_at';
}
