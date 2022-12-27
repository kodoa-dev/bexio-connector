<?php

namespace Aesislabs\BexioConnector\Request\Sales\DocumentSettings;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListDocumentSettings
 */
class ListDocumentSettingsRequest extends Request
{
    const API_PATH = '/2.0/kb_item_setting';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Sales\DocumentSetting>';
}
