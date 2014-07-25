<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class CommBusHelper extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */


	protected $name = 'comm:make';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command Bus Helper Jump On Board and Enjoy the ride ';

	/**
	 * @var RetunDatabasemodel
	 */
	private $worker;
	/**
	 * @var RetunDatabasemodel
	 */



	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct(worker $worker)
	{
		$this->worker = $worker;
		parent::__construct();

	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
//		Get The Given Options from the command line
		$namespace=Config::get('commanderhelperconfig.namespace');
		$folder=$this->argument('folder');
		$commandname=$this->argument('CommandName');
		$tablename=$this->argument('table');

		// Confirm that they are correct, and that
		// the namespace has been read from the
		// config.commandhealperconfig.namespace

		$this->info('I Have Got Namespace :'.$namespace);
		$this->info('I Have Got Destination :'.$folder);
		$this->info('I Have Got Command Name :'.$commandname);
		$this->info('I Have Got Table Name :'.$tablename);

		// Now that's done , lets get on with saving time
		// Send the table name over to the worker
		$command=new BusTables($folder,$commandname,$namespace,$tablename);
		$this->worker->make($command);











//		$this->filegenerator->make($model,$namespace);
//		if(!is_null($tablename)){
//			$this->filegenerator->addfileds($model,$namespace,$tablename);
//			$this->info('Command with Fields Created');
//		}
//
//		if(!is_null($static)){
//			$this->filegenerator->makestatic($model,$namespace,$tablename,$static);
//			$this->info('Static Method Generated');
//		}

		$this->info('All Done...');

	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('CommandName', InputArgument::REQUIRED, 'The Name of the Command'),
			array('folder', InputArgument::REQUIRED, 'Folder Location for Files e.g Users'),
			array('table', InputArgument::REQUIRED, 'Database Table name '),

		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('dataobject', null, InputOption::VALUE_OPTIONAL, 'Use only a data Object for DTO', null),
			array('updatemodel', null, InputOption::VALUE_OPTIONAL, 'Add Methods, Create,Update,Find to Model', null),
			array('createrep', null, InputOption::VALUE_OPTIONAL, 'Create a seprate reposity Connected to the model', null),

		);
	}

}
