<?php

declare(strict_types=1);

namespace App\Controller\Role;

use Slim\Http\Request;
use Slim\Http\Response;

final class Create extends Base
{
    public function __invoke(Request $request, Response $response): Response
    {
        $input = $request->getParsedBody();
        $role = $this->getRoleService()->create($input);

        return $this->jsonResponse($response, 'success', $role, 201);
    }
}
