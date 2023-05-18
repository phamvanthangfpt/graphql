<?php

namespace App\GraphQL\Queries;

use Error;

final class Articles
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $articleSectionId = $args['articleSectionId'];

        if ($articleSectionId === 179) {
          return [
            [
                  "id" => 1,
                  "titleJa" => "新規登録とログイン",
                  "shortTitleJa" => "新規登録とログイン",
                  "titleEn" => "Job Seeker Registration & Login",
                  "shortTitleEn" => "Job Seeker Registration & Login"
              ],
              [
                  "id" => 2,
                  "titleJa" => "企業ブロック",
                  "shortTitleJa" => "企業ブロック",
                  "titleEn" => "Block Companies",
                  "shortTitleEn" => "Block Companies"
              ],
              [
                  "id" => 3,
                  "titleJa" => "プロファイル公開状況",
                  "shortTitleJa" => "プロファイル公開状況",
                  "titleEn" => "Profile Visibility",
                  "shortTitleEn" => "Profile Visibility"
              ],
              [
                  "id" => 4,
                  "titleJa" => "プロファイル管理",
                  "shortTitleJa" => "プロファイル管理",
                  "titleEn" => "Updating Your Profile",
                  "shortTitleEn" => "Updating Your Profile"
              ],
              [
                  "id" => 5,
                  "titleJa" => "パスワード変更 - 登録アドレスが一つの場合",
                  "shortTitleJa" => "パスワード変更 - 登録アドレスが一つの場合",
                  "titleEn" => "Password change - if you have one registered email address",
                  "shortTitleEn" => "Password change - if you have one registered email"
              ],
              [
                  "id" => 6,
                  "titleJa" => "パスワード変更 - 登録アドレスが複数の場合",
                  "shortTitleJa" => "パスワード変更 - 登録アドレスが複数の場合",
                  "titleEn" => "Password change - if you have more than one registered email address",
                  "shortTitleEn" => "Password change - if you have more than one regist"
              ],
              [
                  "id" => 7,
                  "titleJa" => "プロファイル",
                  "shortTitleJa" => "プロファイル",
                  "titleEn" => "Profile",
                  "shortTitleEn" => "Profile"
              ]
          ];
        } else if ($articleSectionId === 172) {
          return [
          [
                "id" => 9,
                "titleJa" => "登録確認メールを受信していません",
                "shortTitleJa" => "登録確認メールを受信していません",
                "titleEn" => "I have not received a confirmation email",
                "shortTitleEn" => "I have not received a confirmation email"
            ],
            [
                "id" => 10,
                "titleJa" => "会員登録について",
                "shortTitleJa" => "会員登録について",
                "titleEn" => "Registration",
                "shortTitleEn" => "Registration"
            ],
            [
                "id" => 11,
                "titleJa" => "サイトの機能について",
                "shortTitleJa" => "サイトの機能について",
                "titleEn" => "Functions",
                "shortTitleEn" => "Functions"
            ],
            [
                "id" => 12,
                "titleJa" => "応募について",
                "shortTitleJa" => "応募について",
                "titleEn" => "Applications",
                "shortTitleEn" => "Applications"
            ],
            [
                "id" => 13,
                "titleJa" => "配信されるメールについて",
                "shortTitleJa" => "配信されるメールについて",
                "titleEn" => "Emails Received From CareerCross",
                "shortTitleEn" => "Emails Received From CareerCross"
            ],
            [
                "id" => 14,
                "titleJa" => "企業からの連絡について",
                "shortTitleJa" => "企業からの連絡について",
                "titleEn" => "Contact From Companies",
                "shortTitleEn" => "Contact From Companies"
            ],
            [
                "id" => 15,
                "titleJa" => "推奨ブラウザ・動作確認",
                "shortTitleJa" => "推奨ブラウザ・動作確認",
                "titleEn" => "Recommended Browser",
                "shortTitleEn" => "Recommended Browser"
            ],
            [
                "id" => 16,
                "titleJa" => "ログインについて",
                "shortTitleJa" => "ログインについて",
                "titleEn" => "Username and Password",
                "shortTitleEn" => "Username and Password"
            ]
        ];
      }
    }
}
