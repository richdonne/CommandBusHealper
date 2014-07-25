<?php
	use Illuminate\Console\Command;
	use Illuminate\Filesystem\Filesystem;


	/**
	 * @property mixed file
	 */
	class HardWorker extends Command
	{

		/*
		 * Linked Traits For Functions
		 */
		use CreateFiledListing;
		use BuildConstructor;
		use CreatePaths;
		use WriteFiles;
		use DefineTemplateStructure;
		use TemplateFunctions;

		/*
		 * Injected Reference to file Class
		 */
		protected $file;


		function __construct (Filesystem $file)
		{
			$this->file = $file;
		}


		/**
		 * Builds the Filename Command
		 * @param $command
		 */
		protected function createfilenameCommand ($command)
		{
			$templatefile = $this->GetTemplateFile('CommandTemplate');
			$templatefile = $this->DefineStructure($templatefile, $command);
			$templatefile = $this->CreateFieldListing($command, $templatefile);
			$this->WriteFileCommand($command, $templatefile);
		}


		/**
		 * Builds the CommandHandler File
		 * @param $command
		 *
		 *
		 */
		protected function CreatefilenameCommandHandler ($command)
		{
			$templatefile = $this->GetTemplateFile('CommandHandler');
			$templatefile = $this->DefineStructure($templatefile, $command);
			$this->WriteFileHandler($command, $templatefile);
		}


	}