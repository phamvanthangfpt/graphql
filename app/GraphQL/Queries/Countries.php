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
                "name_ja" => "日本",
                "region" => [
                    "id" => 1,
                    "name_en" => "Asia",
                    "name_ja" => "アジア",
                ]
            ],
            [
                "id" => 100,
                "name_en" => "English",
                "name_ja" => "英語",
                "region" => [
                    "id" => 2,
                    "name_en" => "Europe",
                    "name_ja" => "ヨーロッパ"
                ]
            ],
        ];
    }
}
