<?php

namespace Aesislabs\BexioConnector\Request\Other\Companies;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListCompanyProfile
 */
class ListCompaniesRequest extends Request
{
    const API_PATH = '/2.0/company_profile';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Other\Company>';
}
