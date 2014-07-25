<?php


	use Illuminate\Filesystem\Filesystem;

	/**
	 * Class worker
	 */
	class worker extends HardWorker
	{
		/**
		 * @var Illuminate\Filesystem\Filesystem
		 */
		protected $file;


		/**
		 * @param Filesystem $file
		 */
		function __construct (Filesystem $file)
		{
			$this->file = $file;


		}


		/**
		 * This is In Charge of Making Everything Work
		 * This Will generate the {filename}command
		 * This Will Generate the (filename)CommandHandler
		 *
		 * @param $command
		 */
		public function make ($command)
		{

			// Create {Name}Command.php
			$this->createfilenameCommand($command);
			// End of Creating {{filename}}Command


			// Create {{name}Commandhandler.php
			$this->CreatefilenameCommandHandler($command);
			// End of Creating {{filename}}CommandHandler

		}


	} // end of class