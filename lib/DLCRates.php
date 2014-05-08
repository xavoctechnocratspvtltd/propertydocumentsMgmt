<?php

namespace propertydocumentMgmt;

class Model_DLCRates extends \Model_Table{
	public $table="propertydocumentMgmt_DLC_rates";
	function init(){
		parent::init();

		$this->addField('name');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}