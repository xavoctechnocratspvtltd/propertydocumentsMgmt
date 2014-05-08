<?php

namespace propertydocumentMgmt;

class Model_Documents extends \Model_Table{

	public $table="propertydocumentMgmt_documents";
	
	function init(){
		parent::init();

		$this->hasOne('propertydocumentMgmt/Property','')
		$this->addField('name');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}