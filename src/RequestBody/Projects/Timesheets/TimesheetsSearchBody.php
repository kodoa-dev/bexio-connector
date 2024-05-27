<?php

namespace Aesislabs\BexioConnector\RequestBody\Projects\Timesheets;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBody;

class TimesheetsSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = TimesheetsSearchBodyItem::class;
}
