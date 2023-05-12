<?php

namespace App\GraphQL\Mutations;

final class CreateEmployerContact
{
    public function __invoke($_, array $args)
    {
        return [
            "url" =>  route('download') . "?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAUANGLNCJRI3F7COI%2F20230511%2Fap-northeast-1%2Fs3%2Faws4_request&X-Amz-Date=20230511T030846Z&X-Amz-SignedHeaders=host&X-Amz-Expires=28800000&X-Amz-Signature=1e73a6d0fd200105d4bdab738dc6d746a93c748e42011df9ef097cd323361670",
            "status" => true,
            "message" => "Email sent to CareerCross Staff"
        ];
    }
}
