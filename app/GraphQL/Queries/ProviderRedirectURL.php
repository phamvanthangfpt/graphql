<?php

namespace App\GraphQL\Queries;


use Laravel\Socialite\Facades\Socialite;

final class ProviderRedirectURL
{
    public function __invoke($_, array $args)
    {
        $provider = $args['provider'];

        if($provider == 'google'){
            $url = Socialite::driver('google')->stateless()->redirect()->getTargetUrl();
        }

        if($provider == 'facebook'){
            $url = 'https://www.facebook.com/';
        }

        if($provider == 'linkedin'){
            $url = 'https://www.linkedin.com/';
        }

        return [
            "url"=> $url
        ];
    }
}
