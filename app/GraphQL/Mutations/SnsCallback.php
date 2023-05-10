<?php

namespace App\GraphQL\Mutations;

final class SnsCallback
{
    public function __invoke($_, array $args)
    {
        $provider = $args['provider'];
        $code = $args['code'];
        $isRegistration = $args['isRegistration'] ?? null;
        $tosAccepted = $args['tosAccepted'] ?? null;

        return [
            'token' => "2132109afajlk",
            'provider' => $provider,
            'code' => $code
        ];
    }
}
