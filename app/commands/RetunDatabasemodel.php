<?php


	class RetunDatabasemodel
	{


		public function make ($table)
		{
			$this->Retrivedatabasetablefield($table);
		}


		public function Retrivedatabasetablefield ($table)
		{
			$table = new $this->tablefields;

			dd($table);
		}

	}