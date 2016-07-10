<?php
    // first.php
    require_once './vendor/autoload.php';

    $client = new Goutte\Client();
    $crawler = $client->request('GET', 'http://profile.hatena.ne.jp/taroooyan/favorites?location=http%3A%2F%2Fprofile.hatena.ne.jp%2Ftaroooyan%2Fprofile');

    // 抽出
    $count = 0;
    $crawler->filter('ul.fanlist')->each(function ($ulist){
        // echo $ulist->a() . "<br>";
        $ulist->filter('span.username')->each(function ($user){
            echo $user->text() . "<br>";
        });
        $ulist->filter('span.nickname')->each(function ($user){
            echo $user->text() . "<br>";
        });
    });
