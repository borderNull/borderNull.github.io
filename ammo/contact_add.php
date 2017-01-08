<?php
/*echo('<pre> data');
var_dump($account['custom_fields']);

echo('</pre>');
//die();
echo('<pre> custom_fields');
var_dump($custom_fields);
echo('</pre>');*/

$contact = array(
    'name' => $data['name'],
    'custom_fields' => array(
        array(
            'id' => $custom_fields['EMAIL'],
            'values' => array(
                array(
                    'value' => $data['email'],
                    'enum' => 'PRIV'
                )
            )
        )
    )
);

if (!empty($data['phone']))
    $contact['custom_fields'][] = array(
        'id' => $custom_fields['PHONE'],
        'values' => array(
            array(
                'value' => $data['phone'],
                'enum' => 'MOB'
            )
        )
    );

if (!empty($data['education'])) {
    echo ("<pre>");
    var_dump($custom_fields['EDUCATION']);
    echo ("</pre>");
    $choose_curs = '';
    if (stristr ($data['education'], 'Android')) {
        $choose_curs='Android';
    } elseif (stristr ($data['education'], 'iOS')) {
        $choose_curs='iOS';
    } elseif (stristr ($data['education'], 'Backend')) {
        $choose_curs='Backend';
    }elseif (stristr ($data['education'], 'UI Design')) {
        $choose_curs='UI Design';
    }

    $curs = array_search($choose_curs, $custom_fields['EDUCATION']['enums']);
    $edu = array(
        'id' => (int)$custom_fields['EDUCATION']['id'],
        'values' => ['enums' => $curs]
    );
    $contact['custom_fields'][] = $edu; // расставляем интересующее направление
}

if (!empty($data['education'])) {

    $lev_enum = '';

    if (stripos($data['education'], 'Beginner')) {
        $lev_enum='Beginner';
    } elseif (stripos($data['education'], 'Middle')) {
        $lev_enum='Middle';
    } elseif (stripos($data['education'], 'Senior')) {
        $lev_enum='Senior';
    }

    if (!empty($lev_enum)) {
        $level= array_search($lev_enum, $custom_fields['LEVEL']['enums']);

        $lev = array(
            'id' => (int)$custom_fields['LEVEL']['id'],
            'values' => ['enums' => $level]
        );
        $contact['custom_fields'][] = $lev; // роставляем интересующее направление
    }
}

if (!empty($data['utm'])) {
    $utm_text='';
    foreach ($data['utm'] as $utm_mark => $value) {
        if (!empty($value) && strlen($value) > 0) {
            $utm_text .= $value . ', ';
        }
    }
    $contact['tags'] = $data['education'] . ', ' . $utm_text; //проставляем теги utm меток

}
$set['request']['contacts']['add'][] = $contact;

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
CheckCurlResponse($code);

/**
 * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
 * нам придётся перевести ответ в формат, понятный PHP
 */
$Response = json_decode($out, true);
$Response = $Response['response']['contacts']['add'];

$output = 'ID добавленных контактов:' . PHP_EOL;
foreach ($Response as $v)
    if (is_array($v))
        $output .= $v['id'] . PHP_EOL;
return $output;
?>