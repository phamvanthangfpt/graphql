<?php

namespace App\GraphQL\Queries;

use Error;

final class Article
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
      $id = $args['id'];
      if ($id < 8) {
        return [
          "id" => 1,
          "titleJa" => "新規登録とログイン",
          "titleEn" => "Job Seeker Registration & Login",
          "contentJa" => "<h2>新規登録とログイン</h2>",
          "contentEn" => "<h2>Job Seeker Registration & Login</h2><br/><p>To login, click the <strong>Login”</strong> button at top of the page where a&nbsp;dropdown menu will appear. Enter your&nbsp;username and password, then click <strong>“Login”</strong>. If your username and password were entered correctly you will be securely logged in (with SSL) and sent to your <strong>“My Page”</strong>.</p>",           
          "breadcrumb" => [
            [
              "relativeLink" => "/",
              "textEn" => "Home",
              "textJa" => "Home",
            ],
            [
              "relativeLink" => "/article/user-guide",
              "textEn" => "My Page User Guide",
              "textJa" => "マイページご利用ガイド",
            ],
            [
              "relativeLink" => "",
              "textEn" => "Job Seeker Registration & Login",
              "textJa" => "新規登録とログイン",
            ]
            ],
            "articleSectionId" => "179"
        ];
      } else {
        return [
          "id" => 2,
          "titleJa" => "登録確認メールを受信していません",
          "titleEn" => "I have not received a confirmation email after registering",
          "contentJa" => "<p>メールの配信まで時間がかかることがありますので、しばらく時間を置いてから確認してください。
あるいは、迷惑メールボックスに振り分けられてしまっている可能性もありますので、迷惑メール振り分け設定をされている場合には、そちらのフォルダもご確認ください。</p>",
          "contentEn" => "<h2>I have not received a confirmation email after registering</h2><br/><p>The system takes a few moments to process your registration, so please check your email a few minutes after registering. Please also check your junk mail folders and security settings and remember to add the domain ‘careercross.com’ to your safe list..</p>",           
          "breadcrumb" => [
            [
              "relativeLink" => "/",
              "textEn" => "Home",
              "textJa" => "Home",
            ],
            [
              "relativeLink" => "/article/user-help",
              "textEn" => "Job Seeker FAQ",
              "textJa" => "よくある質問",
            ],
            [
              "relativeLink" => "",
              "textEn" => "I have not received a confirmation email after registering",
              "textJa" => "登録確認メールを受信していません",
            ]
          ],
          "articleSectionId" => "172"
        ];
      }
    }
}
