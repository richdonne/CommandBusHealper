<?php


	use Illuminate\Database\Eloquent\Model;

	class BusTables
	{

		public $folder;

		public $commandname;

		public $namespace;

		public $tablename;


		function __construct ($folder, $commandname, $namespace, $tablename)
		{
			$this->folder      = $folder;
			$this->commandname = $commandname;
			$this->namespace   = $namespace;
			$this->tablename   = $tablename;
		}

	} //end of class