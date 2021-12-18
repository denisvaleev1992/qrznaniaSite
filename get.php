<?php
	require_once(__DIR__.'/lib/DB.class.php');
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

    if (empty($_POST)) {
    	$result = array(
				'error'=>2
			);
			echo json_encode($result);
    } else {
    	$rand_them = array_rand($_POST, 1);
    	$base = DB::getInstance()->Select('SELECT * FROM knowledgebase WHERE themId=:themId ORDER BY RAND() LIMIT 1',['themId'=>intval($rand_them)]);
    	if (isset($base[0])) {
            $result = array(
				'title'  => $base[0]['title'],
				'text' => $base[0]['text'],
				'img' =>  $base[0]['img'],
				'error'=>0
			);
			echo json_encode($result);
    	} else {
    		$result = array(
				'error'=>1
			);
			echo json_encode($result);
    	}
    }

?>