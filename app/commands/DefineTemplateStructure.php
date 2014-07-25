<?php



trait DefineTemplateStructure {


	public function DefineStructure ($templatefile, $command)
	{
		// check to ensure user has not put Command on the command name
		$commandname = str_replace('Command', '', $command->commandname);
		$commandname = str_replace('command', '', $command->commandname);


		// Change the Namespace to match
		$rpl1 = str_replace('%commandname%', $commandname . 'Command', $templatefile);
		$rpl2 = str_replace('%namespace%', $command->namespace, $rpl1);
		$rpl3 = str_replace('%model%', $command->folder, $rpl2);

		Return $rpl3;


	}

} 