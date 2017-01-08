<?php
$need = array_flip(array( 'EMAIL', /*'FIO',*/ 'PHONE','EDUCATION', 'LEVEL'));
$fields  = array();

/*echo('<pre>') ;
var_dump($account['custom_fields']);
echo('</pre>') ;*/
///
if (isset($account['custom_fields'], $account['custom_fields']['contacts']))
    do {
        foreach ($account['custom_fields']['contacts'] as $field)
            if (is_array($field) && isset($field['id'])) {
                if (isset($field['code']) && isset($need[$field['code']]))
                    $fields[$field['code']] = (int)$field['id'];
                #SCOPE - нестандартное поле, поэтому обрабатываем его отдельно
                /*elseif (isset($field['name']) && $field['name'] == 'Имя')
                    $fields['FIO'] = $field;*/
                elseif (isset($field['name']) && $field['name'] == 'Уровень курса')
                    $fields['LEVEL'] = $field;
                elseif (isset($field['name']) && $field['name'] == 'Интересующий курс')
                    $fields['EDUCATION'] = $field;

                $diff = array_diff_key($need, $fields);
                if (empty($diff))
                    break 2;
            }
        if (isset($diff)){
            /*echo('<pre>') ;
            var_dump($diff);
            echo('</pre>') ;*/
            die('В amoCRM отсутствуют следующие поля' . ': ' . join(', ', $diff));
        }

    else
            die('Невозможно получить дополнительные поля');
    } while (false);
else
    die('Невозможно получить дополнительные поля');
$custom_fields = isset($fields) ? $fields : false;
?>