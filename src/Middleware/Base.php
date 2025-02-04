<?php

declare(strict_types=1);

namespace App\Middleware;

use App\Exception\AuthException;
use Firebase\JWT\JWT;

abstract class Base
{
    protected function checkToken(string $token): object
    {
        try {
            return JWT::decode($token, $_SERVER['SECRET_KEY'], ['HS256']);
        } catch (\UnexpectedValueException) {
            throw new AuthException('Forbidden: you are not authorized.', 403);
        }
    }
}
