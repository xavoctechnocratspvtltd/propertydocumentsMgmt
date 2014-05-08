<?php

namespace propertydocumentMgmt;

class Model_City extends \Model_Table{

	public $table="propertydocumentMgmt_city";
	
	function init(){
		parent::init();

		$this->addField('name');
		$this->hasMany('propertydocumentMgmt/Planing','city_id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}