<?php

/**
	* Description of Aids
	*
	* @author boppanas2
	*/
require_once ('FypsSubModelController.php');

class	Aids	extends	FypsSubModelController
{

		public	function	index()	{
				$this->pageHeader	=	'AIDS';
				$this->addMechTableHeaderInfo("Mech_Table_View",	'Aids/GetTree',	array('AIDS Waterfall',	$this->config->item('base_url')	.	$this->config->item('index_page')	.	'/index'),MODEL_TYPE_AIDS);
				$this->load->view('outline',	$this->data);
		}

		public	function	GetTree()	{
				$tree	=	$this->GetUITree(AIDS_WATERFALL_SCREEN_ID,MODEL_TYPE_AIDS);
				echo	json_encode($tree);
		}
}

//End of class Aids
