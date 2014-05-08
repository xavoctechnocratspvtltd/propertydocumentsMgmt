<?php

namespace propertydocumentMgmt;

class Model_Planing extends \Model_Table{

	public $table="propertydocumentMgmt_property_planing";
	
	function init(){
		parent::init();

		$this->hasOne('propertydocumentMgmt/City','city_id');
		$this->addField('name');
		$this->hasMany('propertydocumentMgmt/Property','planing_id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}