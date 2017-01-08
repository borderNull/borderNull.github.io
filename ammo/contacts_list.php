<?php

$link = 'https://' . $subdomain . '.amocrm.ru/private/api/v2/json/contacts/list?query=' . $data['email'];
$curl = curl_init(); #Сохраняем дескриптор сеанса cURL
#Устанавливаем необходимые опции для сеанса cURL
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
curl_setopt($curl, CURLOPT_URL, $link);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

$out = curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
CheckCurlResponse($code);
if ($out) {

    $Response = json_decode($out, true);

    $contact = $Response["response"]["contacts"][0];
    $fields = $contact["custom_fields"];


    //ищем часть строки в поле education
    $choose_curs = '';
    if (stristr($data['education'], 'Android')) {
        $choose_curs = 'Android';
    } elseif (stristr($data['education'], 'iOS')) {
        $choose_curs = 'iOS';
    } elseif (stristr($data['education'], 'Backend')) {
        $choose_curs = 'Backend';
    } elseif (stristr($data['education'], 'UI Design')) {
        $choose_curs = 'UI Design';
    }

    //если есть соответствие то находим нужное поле и подставляем выбранный курс
    if (!empty($choose_curs)) {
        for ($i = 0, $size = count($fields); $i < $size; ++$i) {
            if ($fields[$i]['name'] == 'Интересующий курс') {
                //echo('есть соответствие Интересующий курс');
                if (!array_search($choose_curs, $fields[$i])) {
                    //echo('есть соответствие');
                    $curs = array_search($choose_curs, $custom_fields['EDUCATION']['enums']);
                    //var_dump($curs);
                    $arg = array(
                        'value' => $choose_curs,
                        'enum' =>(string) $curs
                    );
                    array_push($contact['custom_fields'][$i]['values'], $arg);
                    break;
                }
            }
        }
    }


   /* echo("<pre> ");
    var_dump($contact);
    echo("</pre>");*/
    $set['request']['contacts']['update'][] = $contact;

    #Формируем ссылку для запроса
    $link = 'https://' . $subdomain . '.amocrm.ru/private/api/v2/json/contacts/set';
    $curl = curl_init(); #Сохраняем дескриптор сеанса cURL
    #Устанавливаем необходимые опции для сеанса cURL
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
    curl_setopt($curl, CURLOPT_URL, $link);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($set));
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
    curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

    $out = curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
    $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    die('Такой контакт уже существует в amoCRM');
}

?>