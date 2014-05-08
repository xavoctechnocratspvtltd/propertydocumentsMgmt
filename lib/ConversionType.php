<?php

namespace propertydocumentMgmt;

class Model_ConversionType extends \Model_Table{
	public $table="propertydocumentMgmt_conversion_type";
	function init(){
		parent::init();

		$this->addField('name');
		$this->hasMany('propertydocumentMgmt/Property','conversion_type__id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}