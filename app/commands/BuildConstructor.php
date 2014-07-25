<?php



trait BuildConstructor {
	Public function BuildConstructor ($fields)
	{

		$construct    = '';
		$publicfields = '';
		$innerfields  = '';

		foreach ($fields as $field) {
			if(! in_array($field,['id','created_at','updated_at'])){
			$publicfields = $publicfields . ' public $' . $field . ';  ';
			$construct    = $construct . '$' . $field . ',';
			$innerfields  = $innerfields . '$this->' . $field . '=' . '$' . $field . ';';
			}
		}

		return array(
			$publicfields,
			$construct,
			$innerfields
		);
	}
} 