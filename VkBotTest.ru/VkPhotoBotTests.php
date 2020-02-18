<?php
    require "ConfigTest.php";
    require "PhotosTest.php";
    require_once "vendor/autoload.php";
    use DigitalStar\vk_api\vk_api;


    $vk = vk_api::create($conf['group_token'], $conf['v'])->setConfirm($conf['conform_token']);


    $data = json_decode(file_get_contents('php://input'));
    $u_id = $data->object->from_id;
    $message = $data->object->text;

    $temp_link = file($conf['temp_link']); // Запись данных в первый альбом
    if ($temp_link[0] != $album) {
        file_put_contents($conf['temp_link'], $album);
        return true;
    }


    $file = file_get_contents($conf['photos']); // Первый альбом
    $photos_all = explode("\n", $file);

 //   $fileDogs = file_get_contents('PhotoDogs'); // Второй альбом
   // $photos_Dogs = explode("\n", $fileDogs);

    $user_info = json_decode(file_get_contents($conf['apiurl'].
            'users.get?user_id='. $u_id.
            '$v='. $conf['v'].
            '$access_token='. $conf['standalone'])
    );
    $vk->debug();
    $vk->initVars($id, $message, $payload); //инициализация переменных
    $cats_btn = $vk->buttonText('Коты', 'green', ['command' => 'cats']); //создание кнопки
    $dogs_btn = $vk->buttonText('Собаки', 'red', ['command' => 'dogs']);
    if ($payload) {
        if ($payload['command'] == 'cats')


        $myCurl = curl_init();
        curl_setopt_array($myCurl, array(
            CURLOPT_URL => $conf['apiurl'] . 'messages.send?user_id=' . $u_id .
                '&group_id=' . $conf['group_id'] .
                '&attachment=' . $photos_all[mt_rand(0, count($photos_all) - 1)] .
                '&v=' . $conf['v'] .
                '&access_token=' . $conf['group_token'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query(array())
        ));
        $response = curl_exec($myCurl);
        curl_close($myCurl);
        $vk->reply($u_id, 'Это тебе! :)');
    }// elseif ($payload['command'] == 'dogs') { }
    else
    $vk->sendButton($id, 'Видишь кнопку? Нажми на нее!', [[$cats_btn]]); //отправляем клавиатуру с сообщением

    $needword = 'стоп';
    $stop = stristr($message, $needword);
    if ($stop !== false) {
        $vk->sendButton($u_id, 'Все-все, прекращаю ', [[]]);
    }
