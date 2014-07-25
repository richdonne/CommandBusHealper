<?php



trait TemplateFunctions {

	public function readtemplate ($template)
	{
		echo('Reading Template File :' . $template);
		$templatelocation = Config::get('commanderhelperconfig.' . $template);
		echo('Got Template Location :' . $templatelocation);

		Return $templatefile = $this->file->get($templatelocation);

	}


	/**
	 * @return mixed
	 */
	protected function GetTemplateFile ($teamplate)
	{
		$templatefile = $this->readtemplate($teamplate);

		return $templatefile;
	}

} 