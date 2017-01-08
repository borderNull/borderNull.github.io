<?
$success = '';

$fio = (!empty($_POST['fio'])) ? strip_tags($_POST['fio']) : 'не указано';
$phone = (!empty($_POST['phone'])) ? strip_tags($_POST['phone']) : 'не указан';
$page = (!empty($_POST['page'])) ? strip_tags($_POST['page']) : 'не указан';

//for utm
$utm_source = (!empty($_POST['source'])) ? strip_tags($_POST['source']) : 'не указан';
$utm_medium = (!empty($_POST['medium'])) ? strip_tags($_POST['medium']) : 'не указан';
$utm_campaign = (!empty($_POST['campaign'])) ? strip_tags($_POST['campaign']) : 'не указан';
$utm_term = (!empty($_POST['term'])) ? strip_tags($_POST['term']) : 'не указан';
$utm_content = (!empty($_POST['content'])) ? strip_tags($_POST['content']) : 'не указан';


//$message = "Ф.И.О.: " . $fio . "\n\rТелефон: " . $phone . "\n\r";
$message = "Ф.И.О.: " . $fio . "\n\rТелефон: " . $phone . "\n\rСо страницы " . $page . "\n\rРекламная сеть " . $utm_source . "\n\rТип трафика " . $utm_medium . "\n\rОбозначение рекламной кампании " . $utm_campaign . "\n\rКлючевые слова " . $utm_term . "\n\rСодержание кампании " . $utm_content;
$headers = "From: " . $fio . "(" . $phone . ")<" . $fio . "(" . $phone . ")>\r\ncontent-type:text/plain; charset=utf-8\r\n";

$success = mail('info@skill-branch.ru', 'SkillBranch: Помощь в выборе профессии', $message, $headers);


if ($success) {
    echo json_encode($success);
    die();
}


$contacts['request']['contacts']['add'] = array(
    array(
        'name' => $fio, #Имя контакта
        //'last_modified'=>1298904164, //optional
        /*'linked_leads_id' => array( #Список с айдишниками сделок контакта
            3698752,
            3698754
        ),
        'company_name' => 'amoCRM', #Наименование компании*/
        'tags' => 'Important, USA', #Теги
        'custom_fields' => array(
            #Должность
            array(
                'id' => 458605,
                'values' => array(
                    array(
                        'value' => 'CEO'
                    )
                )
            ),
            array(
                #Телефоны
                'id' => 458607, #Уникальный индентификатор заполняемого дополнительного поля
                'values' => array(
                    array(
                        'value' => '415.874.3275',
                        'enum' => 'MOB' #Мобильный
                    ),
                    array(
                        'value' => '415.374.3278',
                        'enum' => 'OTHER'
                    ),
                    array(
                        'value' => '415.374.3279',
                        'enum' => 'FAX' #Факс
                    ),
                    array(
                        'value' => '415.874.3274',
                        'enum' => 'HOME' #Домашний
                    )
                )
            ),
            array(
                #E-mails
                'id' => 458609,
                'values' => array(
                    array(
                        'value' => 'test@mail.com',
                        'enum' => 'WORK', #Рабочий
                    ),
                    array(
                        'value' => 'mymail@gmail.com',
                        'enum' => 'PRIV',
                    ),
                    array(
                        'value' => 'myaccount@amocrm.ru',
                        'enum' => 'OTHER',
                    )
                )
            ),
            array(
                #Адрес
                'id' => 458615,
                'values' => array(
                    array(
                        'value' => '505 Montgomery St., Suite 1016, San Francisco, CA 94111'
                    )
                )
            ),
            array(
                #Web-site
                'id' => 458611,
                'values' => array(
                    array(
                        'value' => 'amocrm.com'
                    )
                )
            ),
            array(
                #Icq, skype, jabber, IM, gtalk, etc...
                'id' => 458613,
                'values' => array(
                    array(
                        'value' => '987654321',
                        'enum' => 'ICQ'
                    ),
                    array(
                        'value' => 'ander_test',
                        'enum' => 'JABBER'
                    )
                )
            ),
            array(
                #Смарт адрес
                'id' => 458615, #Уникальный индентификатор заполняемого дополнительного поля
                'values' => array(
                    array(
                        'value' => 'Address line 1',
                        'subtype' => 'address_line_1',
                    ),
                    array(
                        'value' => 'Address line 2',
                        'subtype' => 'address_line_2',
                    ),
                    array(
                        'value' => 'Город',
                        'subtype' => 'city',
                    ),
                    array(
                        'value' => 'Регион',
                        'subtype' => 'state',
                    ),
                    array(
                        'value' => '203',
                        'subtype' => 'zip',
                    ),
                    array(
                        'value' => 'RU',
                        'subtype' => 'country',
                    )
                )
            )
        )
    ),
    array(
        'name' => 'Anders Fridden',
        //'last_modified'=>1298904164, //optional
        'linked_leads_id' => array(),
        'company_name' => 'amoCRM',
        'custom_fields' => array(
            array(
                'id' => 458607,
                'values' => array(
                    array(
                        'value' => '415.874.3467',
                        'enum' => 'WORK'
                    ),
                    array(
                        'value' => '415.374.3439',
                        'enum' => 'OTHER'
                    ),
                )
            ),
            array(
                'id' => 458609,
                'values' => array(
                    array(
                        'value' => 'anders_test@mail.com',
                        'enum' => 'WORK',
                    )
                )
            ),
            array(
                'id' => 458615,
                'values' => array(
                    array(
                        'value' => '234 Montgomery St., Suite 1021, San Francisco, CA 94111'
                    )
                )
            ),
            array(
                'id' => 458611,
                'values' => array(
                    array(
                        'value' => 'amocrm.com'
                    )
                )
            ),
            array(
                'id' => 458613,
                'values' => array(
                    array(
                        'value' => '987654321',
                        'enum' => 'ICQ'
                    ),
                    array(
                        'value' => 'anders_test',
                        'enum' => 'JABBER'
                    )
                )
            ),
            array(
                #Нестандартное дополнительное поле типа "мультисписок", которое мы создали
                'id' => 426106,
                'values' => array(
                    1237756,
                    1237758
                )
            )
        )
    )
);
?>


