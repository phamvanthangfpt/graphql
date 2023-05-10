<?php

namespace App\GraphQL\Mutations;

final class CreatePreRegistration
{
    public function __invoke($_, array $args)
    {
        return [
            'status' => true
        ];
    }
}
