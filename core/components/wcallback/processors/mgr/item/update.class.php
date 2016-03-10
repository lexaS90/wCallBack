<?php

/**
 * Update an Item
 */
class wCallBackItemUpdateProcessor extends modObjectUpdateProcessor {
	public $objectType = 'wCallBackItem';
	public $classKey = 'wCallBackItem';
	public $languageTopics = array('wcallback');
	//public $permission = 'save';


	/**
	 * We doing special check of permission
	 * because of our objects is not an instances of modAccessibleObject
	 *
	 * @return bool|string
	 */
	public function beforeSave() {
		if (!$this->checkPermissions()) {
			return $this->modx->lexicon('access_denied');
		}

		return true;
	}


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$id = (int)$this->getProperty('id');
		$name = trim($this->getProperty('name'));
		if (empty($id)) {
			return $this->modx->lexicon('wcallback_item_err_ns');
		}

		if (empty($name)) {
			$this->modx->error->addField('name', $this->modx->lexicon('wcallback_item_err_name'));
		}		

		return parent::beforeSet();
	}
}

return 'wCallBackItemUpdateProcessor';
