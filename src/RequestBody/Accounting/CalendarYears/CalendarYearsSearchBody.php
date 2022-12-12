<?php

namespace Aesislabs\BexioConnector\RequestBody\Accounting\CalendarYears;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBody;

class CalendarYearsSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = CalendarYearsSearchBodyItem::class;
}
