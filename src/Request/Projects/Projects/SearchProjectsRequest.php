<?php

namespace Aesislabs\BexioConnector\Request\Projects\Projects;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchProjects
 */
class SearchProjectsRequest extends Request
{
    const API_PATH = '/pr_project/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Projects\Project>';
}
