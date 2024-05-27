<?php

namespace Aesislabs\BexioConnector\RequestBody\Other\Notes;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBody;

class NotesSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = NotesSearchBodyItem::class;
}
