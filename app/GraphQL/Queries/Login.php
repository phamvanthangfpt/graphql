<?php

namespace App\GraphQL\Queries;

use Error;

final class Login
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
//        guard: String!, email: String!, password: String!, remember: Boolean
        $guard = $args['guard'];
        $email = $args['email'];
        $password = $args['password'];
        $remember = $args['remember'];

        if($email != 'admin@gmail.com' || $password != '12345678'){
            return new Error('Incorrect account or password');
        }

        return [
            "token" =>  "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMzZlOWFmY2RhMjI4MTM3ZjZkNzNkZDA0OGRjYzNmNmJlMjMxNWUwNDZmYjZiODc2Mzg1MzUyZWExMzEyN2M0MWZiZjBkNTliZGMxNWFiNDQiLCJpYXQiOjE2NzgyNTk0MDMuMDkzOTk4LCJuYmYiOjE2NzgyNTk0MDMuMDk0LCJleHAiOjE2ODA4NTE0MDMuMDg1Nzk5LCJzdWIiOiIxIiwic2NvcGVzIjpbImpvYnNlZWtlciJdfQ.KhXOamXdMZEyNTAXnlAxy_1xQt5HypxTzq31VkFLLdrz5W4KzAW6AXPMCS8SAv3sk5YjphzpcCt4HODJG9bhsB1F5BP4W5gsImd7DLR_FZoM_KYvXnP2aspcWiCHso-ooQNRkwrqKRjUj-QaHSu1f5_yoddIZV1T17zBJFVIJIGP8e3Akf_cKLhe48XRB9tsh5Qdrjh9WdPuZK411BjXRJDyC1Uforehfp1KOak2rvcUtgN4xH-n_DlRZw0eVt0QHhLe_ediVVwRYhswT8QwwoADNG6xTppuLFBf-sZ5iHafQ6j5rGcndaXwadHlCHfpq7vNzVPPnCtkyEYow720Vsumy_Fudn3TenQZnTboIy3IWkiAosdMp2mc14V4t1oP3Irlhwvi-JWbrPc_9bovcR_oCnKNX8dI28gFk882j0Dd4nwnThyM4q3uyhTpLyGG6qoGNQ3P_04Q6pvn7u6UsQL5ChgudGJy9ugknPfFDhcxKkO6xERvxzMSEnM2pe3GJ7g0I77Dtj4P6XolLq3P58mEGaIFwg6O2blmaDXE9F0j4byPyYzesfC7C9xubGdkBaN3tuYBabZ65hRB96MxXXS1svYE7qD9hKd5gE_m15xWfshNbCsjXTOd0JG42VPyOGempGeLT9yh7WQ5pX3Ksd-cniJ-vBT5OmG3FPoPuAk",
            "guard" =>  "jobseeker"
        ];
    }
}
