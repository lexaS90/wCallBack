<?php

/**
 * Create an Item
 */
class wCallBackItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'wCallBackItem';
	public $classKey = 'wCallBackItem';
	public $languageTopics = array('wcallback');
	//public $permission = 'create';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$name = trim($this->getProperty('name'));
		if (empty($name)) {
			$this->modx->error->addField('name', $this->modx->lexicon('wcallback_item_err_name'));
		}


		$this->setProperties(array('date' => date("Y-m-d")));

		return parent::beforeSet();
	}

}

return 'wCallBackItemCreateProcessor';
//var_dump($this->getProperties());exit();
//return $this->getProperties();