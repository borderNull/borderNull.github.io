<?
$success = '';

$name = (!empty($_POST['name'])) ? strip_tags($_POST['name']) : 'не указано';
$surname = (!empty($_POST['surname'])) ? strip_tags($_POST['surname']) : 'не указана';
$phone = (!empty($_POST['phone'])) ? strip_tags($_POST['phone']) : 'не указан';
$email = (!empty($_POST['mail'])) ? strip_tags($_POST['mail']) : 'не указан';
$title = (!empty($_POST['title'])) ? strip_tags($_POST['title']) : 'не указано';
$page = (!empty($_POST['page'])) ? strip_tags($_POST['page']) : 'не указан';

//for utm
$utm_source = (!empty($_POST['source'])) ? strip_tags($_POST['source']) : 'не указан';
$utm_medium = (!empty($_POST['medium'])) ? strip_tags($_POST['medium']) : 'не указан';
$utm_campaign = (!empty($_POST['campaign'])) ? strip_tags($_POST['campaign']) : 'не указан';
$utm_term = (!empty ($_POST['term'])) ? strip_tags($_POST['term']) : 'не указан';
$utm_content = (!empty($_POST['content'])) ? strip_tags($_POST['content']) : 'не указан';

$message = "Хочу записаться на обучение '" . $title . "'!\n\rФамилия: " . $surname . "\n\rИмя: " . $name . "\n\rТелефон: " . $phone . "\n\rE-mail: " . $email."\n\rСо страницы ".$page."\n\rРекламная сеть ".$utm_source."\n\rТип трафика ".$utm_medium."\n\rОбозначение рекламной кампании ".$utm_campaign."\n\rКлючевые слова ".$utm_term."\n\rСодержание кампании ".$utm_content;
//$message = "Хочу записаться на обучение '" . $title . "'!\n\rФамилия: " . $surname . "\n\rИмя: " . $name . "\n\rТелефон: " . $phone . "\n\rE-mail: " . $email . "\n\r";
$headers = "From: " . $email . "<" . $email . ">\r\ncontent-type:text/plain; charset=utf-8\r\n";

$success = mail('info@skill-branch.ru', 'SkillBranch: Запись на обучение ' . $title, $message, $headers);

if ($success) {
    echo json_encode($success);
    die();
}

?>