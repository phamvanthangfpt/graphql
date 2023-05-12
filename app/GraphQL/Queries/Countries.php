<?php

namespace App\GraphQL\Queries;

use Error;

final class Countries
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke()
    {
        return [
            [
                "id" => 99,
                "name_en" => "Japan",
                "region" => [
                    "id" => 1,
                    "name_en" => "Asia"
                ]
            ],
            [
                "id" => 100,
                "name_en" => "English",
                "region" => [
                    "id" => 2,
                    "name_en" => "Europe"
                ]
            ],
        ];
    }
}
