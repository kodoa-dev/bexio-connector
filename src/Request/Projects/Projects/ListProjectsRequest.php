<?php

namespace Aesislabs\BexioConnector\Request\Projects\Projects;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListProjects
 */
class ListProjectsRequest extends Request
{
    const API_PATH = '/pr_project';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Projects\Project>';
}
