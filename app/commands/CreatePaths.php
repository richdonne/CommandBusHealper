<?php



trait CreatePaths {
	public function CreateNameSpacePath ($command){
		Return $path = app_path() . '/' . $command->namespace . '/' . $command->folder;
	}

	Public function CreateCommandPath ($command)
	{
		$path = app_path() . '/' . $command->namespace . '/' . $command->folder . '/' . $command->commandname . 'Command.php';

		return $path;
	}

	Public function CreateCommandHandlerPath ($command)
	{
		$path = app_path() . '/' . $command->namespace . '/' . $command->folder . '/' . $command->commandname . 'CommandHandler.php';

		return $path;
	}
} 