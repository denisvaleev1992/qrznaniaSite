<?php
	require_once(__DIR__.'/lib/DB.class.php');
	require_once(__DIR__.'/lib/TG.class.php');

	$config = [];
	$config['db'] = [
    'host' => 'localhost',
    'port' => '3306',
    'user' => 'u1406926_default',
    'pass' => '69uYJ8ng8P6xZHo3',
    'base' => 'u1406926_default'
	];
	DB::getInstance()
            ->Connect(
                $config['db']['user'],
                $config['db']['pass'],
                $config['db']['base'],
                $config['db']['host'],
                $config['db']['port']
            );


    $body = file_get_contents('php://input'); //Получаем в $body json строку
    $arr = json_decode($body, true); //Разбираем json запрос на массив в переменную $arr
  
    function cir_strrev($stroka){ //Так как функция strrev не умеет нормально переворачивать кириллицу, нужен костыль через массив. Создадим функцию
        preg_match_all('/./us', $stroka, $array); 
        return implode('',array_reverse($array[0]));
    }
 
  
    //Сразу и создадим этот класс, который будет написан чуть позже
    //Сюда пишем токен, который нам выдал бот
    $tg = new tg('1932757716:AAHaS3DbYxmiWAO3znaU0S0SMfFXph-XFaU');
  
    $sms = $arr['message']['text']; //Получаем текст сообщения, которое нам пришло.
    //О структуре этого массива который прилетел нам от телеграмма можно узнать из официальной документации.
  
    //Сразу и id получим, которому нужно отправлять всё это назад
    $tg_id = $arr['message']['chat']['id'];
  
    //Формируем ответ
    switch ($sms) {
    	case 'Физика':
    		$base = DB::getInstance()->Select('SELECT * FROM knowledgebase WHERE themId=1 ORDER BY RAND() LIMIT 1');
    		break;
    	case 'Математика':
    		$base = DB::getInstance()->Select('SELECT * FROM knowledgebase WHERE themId=2 ORDER BY RAND() LIMIT 1');
    		break;
    	case 'Искусство':
    		$base = DB::getInstance()->Select('SELECT * FROM knowledgebase WHERE themId=3 ORDER BY RAND() LIMIT 1');
    		break;
    	case 'Астрономия':
    		$base = DB::getInstance()->Select('SELECT * FROM knowledgebase WHERE themId=4 ORDER BY RAND() LIMIT 1');
    		break;
    	case 'История':
    		$base = DB::getInstance()->Select('SELECT * FROM knowledgebase WHERE themId=5 ORDER BY RAND() LIMIT 1');
    		break;
    	case 'География':
    		$base = DB::getInstance()->Select('SELECT * FROM knowledgebase WHERE themId=6 ORDER BY RAND() LIMIT 1');
    		break;
    	default:
    		$base = DB::getInstance()->Select('SELECT * FROM knowledgebase ORDER BY RAND() LIMIT 1');
    		break;
    }
    $sms_rev = $base[0]['title'].'
    '.strip_tags($base[0]['text']);
    
    $keyboard = array(
      array(
         array('text'=>'Физика','callback_data'=>'{"action":"like","count":0,"text":":like:"}'),
         array('text'=>'Математика','callback_data'=>'{"action":"like","count":0,"text":":like:"}'),
      ),
      array(
         array('text'=>'Искусство','callback_data'=>'{"action":"like","count":0,"text":":like:"}'),
         array('text'=>'Астрономия','callback_data'=>'{"action":"like","count":0,"text":":like:"}'),
      ),
      array(
         array('text'=>'История','callback_data'=>'{"action":"like","count":0,"text":":like:"}'),
         array('text'=>'География','callback_data'=>'{"action":"like","count":0,"text":":like:"}'),
      ),
      array(
         array('text'=>'Показать случайный факт','callback_data'=>'{"action":"like","count":0,"text":":like:"}'),
      ),
   );
  
    //Используем наш ещё не написанный класс, для отправки сообщения в ответ
    $tg->send($tg_id, $sms_rev, $keyboard);
 
    exit('ok'); //Обязательно возвращаем "ok", чтобы телеграмм не подумал, что запрос не дошёл





?>