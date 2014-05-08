<?php

namespace propertydocumentMgmt;

class Model_Expenese extends \Model_Table{

	public $table="propertydocumentMgmt_expenses";
	
	function init(){
		parent::init();

		$this->addField('name');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}