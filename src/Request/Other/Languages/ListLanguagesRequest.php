<?php

namespace Aesislabs\BexioConnector\Request\Other\Languages;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListLanguages
 */
class ListLanguagesRequest extends Request
{
    const API_PATH = '/2.0/language';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Other\Language>';
}
