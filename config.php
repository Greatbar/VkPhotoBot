<?php
    $album = 'https://vk.com/album-191979000_270439122';
    $res = parse_url($album);
    $path = substr($res['path'], 6);
    $arr = explode('_', $path);
    $owner_id = $arr[0];
    $album_id = $arr[1];
    $standalone = "e6542380fb566f08114d022164496edbbc3934fc25f95d7225d115a454fbafe2622c60c7f6153af269cfe";
    $group_token = "2463fc77e8fa0292fc926549bca76b73248439b1061cc820a2d48ad98b7b63e9e48984f541208078532e0";

    $conf = [
        'standalone' => 'e6542380fb566f08114d022164496edbbc3934fc25f95d7225d115a454fbafe2622c60c7f6153af269cfe',
        'group_token' => '2463fc77e8fa0292fc926549bca76b73248439b1061cc820a2d48ad98b7b63e9e48984f541208078532e0',
        'conform_token' => '39b68685',
        'message' => "Скинь фото",
        'not_command' => 'Я умею присылать тольки фотки, попробуй написать "Скинь фото" ',
        'owner_id' => $owner_id,
        'album_id' => $album_id,
        'group_id' => '191979000',
        'apiurl' => 'https://api.vk.com/method/',
        'photos' => 'photos.txt',
        'path' => substr($_SERVER['PHP_SELF'], 0, -7),
        'temp_link' => 'temp_album.txt',
        'random_id' => mt_rand(0000000000, 999999999999),
        'v' => '5.50'

    ];
