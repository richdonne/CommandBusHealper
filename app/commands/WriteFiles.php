<?php



trait WriteFiles {
	/**
	 * @param $command
	 * @param $templatefile
	 */
	Public function WriteFile ($command, $templatefile,$path)
	{
		$namespacepath=$this->CreateNameSpacePath($command);
		if(! file_exists($namespacepath) ){
			File::makeDirectory($namespacepath, 0777, true);
		}


		$this->file->delete($command);
		$this->file->put($path, $templatefile);
	}

	Public function WriteFileCommand ($command, $templatefile)
	{
		$path = $this->CreateCommandPath($command);
		$this->WriteFile($command,$templatefile,$path);
	}

	Public function WriteFileHandler ($command, $templatefile)
	{
		$path = $this->CreateCommandHandlerPath($command);
		$this->WriteFile($command,$templatefile,$path);
	}
} 