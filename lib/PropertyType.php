<?php

namespace propertydocumentMgmt;

class Model_PropertyType extends \Model_Table{

	public $table="propertydocumentMgmt_property_type";
	
	function init(){
		parent::init();

		$this->addField('name');
		$this->hasMany('propertydocumentMgmt/Property','property_type_id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}