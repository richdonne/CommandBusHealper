<?php



trait CreateFiledListing {
	Public function CreateFieldListing ($command, $templatefile)
	{
		$tablefields = $this->GetDataBaseFields($command->tablename);


		list($publicfields, $construct, $innerfields) = $this->BuildConstructor($tablefields);

		$construct    = rtrim($construct, ',');
		$rpl1         = str_replace('%publicfields%', $publicfields, $templatefile);
		$rpl2         = str_replace('%varibles%', $construct, $rpl1);
		$templatefile = str_replace('%innerfields%', $innerfields, $rpl2);

		return $templatefile;
	}

	private  function GetDataBaseFields ($tablename)
	{
		Return $this->getdbtableschema($tablename);
	}

	private function getdbtableschema ($table)
	{
		Return Schema::getColumnListing($table);
	}


} 