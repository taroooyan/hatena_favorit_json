<?php
    # require Goutte
    require_once './vendor/autoload.php';

    $client = new Goutte\Client();
    $html = $client->request('GET', 'http://b.hatena.ne.jp/taroooyan/follow');

    // 抽出
    $users = [];

    # image profile  url
    $count = 0;
    $html->filter('div.profile-image img')->each(function ($ulist) use (&$count, &$users){
        $users[$count]['profile-image'] = $ulist->attr('src');
        $count += 1;
    });

    # username
    $count = 0;
    $html->filter('a.username')->each(function ($ulist) use (&$count, &$users){
        $username = $ulist->text();
        $users[$count]['username'] = $username;
        $count += 1;
    });

    $json = json_encode($users);
    // 出力
    echo $json;

