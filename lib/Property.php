<?php

namespace propertydocumentMgmt;

class Model_PropertyType extends \Model_Table{
	public $table="propertydocumentMgmt_proprties";
	function init(){
		parent::init();

		$this->hasOne('propertydocumentMgmt/PropertyType','property_type_id');
		$this->hasOne('propertydocumentMgmt/ConversionType','conversion_type_id');
		$this->hasOne('propertydocumentMgmt/Planing','planinig_id');
		$this->hasOne('propertydocumentMgmt/Agent','agent_id');
		$this->addField('name');

		$this->hasMany('propertydocumentMgmt/DLCRates','property_id');
		$this->hasMany('propertydocumentMgmt/Documents','property_id');
		$this->hasMany('propertydocumentMgmt/Expenses','property_id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}