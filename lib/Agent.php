<?php

namespace propertydocumentMgmt;

class Model_Agent extends \Model_Table{
	public $table="propertydocumentMgmt_agents";
	function init(){
		parent::init();


		$this->addField('name');
		$this->hasMany('propertydocumentMgmt/Property','agent_id');
		$this->hasMany('propertydocumentMgmt/PaymentStatus','agent_id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}