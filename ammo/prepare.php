<?php
function CheckCurlResponse($code)
{
    $code = (int)$code;
    $errors = array(
        301 => 'Moved permanently',
        400 => 'Bad request',
        401 => 'Unauthorized',
        403 => 'Forbidden',
        404 => 'Not found',
        500 => 'Internal server error',
        502 => 'Bad gateway',
        503 => 'Service unavailable'
    );
    try {
        #Если код ответа не равен 200 или 204 - возвращаем сообщение об ошибке
        if ($code != 200 && $code != 204)
            throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error', $code);
    } catch (Exception $E) {
        die('Ошибка: ' . $E->getMessage() . PHP_EOL . 'Код ошибки: ' . $E->getCode());
    }
}

$name = (!empty($_POST['name'])) ? strip_tags($_POST['name']) : '';
$phone = (!empty($_POST['phone'])) ? strip_tags($_POST['phone']) : '';
$email = (!empty($_POST['email'])) ? strip_tags($_POST['email']) : '';
$education = (!empty($_POST['education'])) ? strip_tags($_POST['education']) : '';
$utm_source = (!empty($_POST['source'])) ? strip_tags($_POST['source']) : '';
$utm_medium = (!empty($_POST['medium'])) ? strip_tags($_POST['medium']) : '';
$utm_campaign = (!empty($_POST['campaign'])) ? strip_tags($_POST['campaign']) : '';
$utm_term = (!empty($_POST['term'])) ? strip_tags($_POST['term']) : '';
$utm_content = (!empty($_POST['content'])) ? strip_tags($_POST['content']) : '';
$utm = array(
    'source' => $utm_source,
    'medium' => $utm_medium,
    'campaign' => $utm_campaign,
    'term' => $utm_term,
    'content' => $utm_content
);

$data = array(
    'name' => $name, //имя
    'email' => $email,
    'phone' => $phone, //телефон
    'education' => $education, // интересующий курс
    'utm' => $utm //массив утм меток
);

$scope_info = array(
    'education' => 'Интересующий курс',
    'utm' => 'UTM метки'
);

/*echo '<pre>';
var_dump($data);
echo '</pre>';*/

#Если не указано имя или e-mail контакта - уведомляем
if (empty($data['name']))
    die('Не заполнено имя контакта');
if (empty($data['email']))
    die('Не заполнен E-mail контакта');
?>