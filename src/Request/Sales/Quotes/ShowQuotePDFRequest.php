<?php

namespace Aesislabs\BexioConnector\Request\Sales\Quotes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowQuotePDF
 */
class ShowQuotePDFRequest extends Request
{
    const API_PATH = '/kb_offer/{quote_id}/pdf';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\File';
}
