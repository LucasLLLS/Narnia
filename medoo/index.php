<?php

	require('medoo.php');

	$database = new medoo([
	// required
		'database_type' => 'mysql',
		'database_name' => 'test',
		'server' => 'localhost',
		'username' => 'root',
		'password' => '',
		'charset' => 'utf8'
	]);


	//INSERT
	// $last_user_id = $database->insert("pessoas", [

	// 	["nome" => "Jon Doe",
	// 		"idade" => 25,
	// 		"(JSON) livros"=> ['Último Trono','O inimigo de deus','O Rei do inverno']
	// 	],

	// 	["nome" => "Lucas",
	// 		"idade" => 23,
	// 		"(JSON) livros"=> ['A canção da espada','O inimigo de deus','O Rei do inverno']
	// 	]
	// ]);

	//SELECT

	$resultados = $database->select("pessoas","*");

	foreach($resultados as $r){
		echo "-".$r['nome']."<br>";
	}