<?php
$album = 'https://vk.com/album-191979000_270439122';
$res = parse_url($album);
$path = substr($res['path'], 6);
$arr = explode('_', $path);
$owner_id = $arr[0];
$album_id = $arr[1];

$standalone = "";
$group_token = "";

$conf = [
    'standalone' => '',
    'group_token' => '',
    'conform_token' => '',
    'not_command' => 'Я умею присылать тольки фотки, попробуй попросить у меня фотографию :) ',
    'owner_id' => $owner_id,
    'album_id' => $album_id,
    'group_id' => '191979000',
    'apiurl' => 'https://api.vk.com/method/',
    'photos' => 'photos.txt',
    'path' => substr($_SERVER['PHP_SELF'], 0, -2),
    'temp_link' => 'temp_album.txt',
    'random_id' => mt_rand(0000000000, 999999999999),
    'v' => '5.81'

];
