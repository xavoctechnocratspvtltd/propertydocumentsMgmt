<?php

namespace propertydocumentMgmt;

class Model_PaymentStatus extends \Model_Table{

	public $table="propertydocumentMgmt_paymentstatus";
	
	function init(){
		parent::init();

		$this->hasOne('propertydocumentMgmt/Agent','agent_id');
		$this->hasOne('propertydocumentMgmt/Property','property_id');
		$this->addField('name');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}