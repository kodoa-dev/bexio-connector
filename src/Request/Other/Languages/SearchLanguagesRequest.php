<?php

namespace Aesislabs\BexioConnector\Request\Other\Languages;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchLanguages
 */
class SearchLanguagesRequest extends Request
{
    const API_PATH = '/2.0/language/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Other\Language>';
}
