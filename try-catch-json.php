<?php

	try{

		$var = 3;

		switch($var){
			case 1:

				throw new Exception("O valor eh 1");

			case 2:
				throw new Exception("O valor eh 2");

			default:
				throw new Exception("O valor nao eh 2 nem 1");
				
		}

	}catch(Exception $ex){
		print(json_encode(
			array(
				'status'	=>	false,
				'msg'		=>	$ex->getMessage()
				)
		));
	}