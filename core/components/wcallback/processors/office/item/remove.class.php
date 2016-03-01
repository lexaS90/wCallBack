<?php

/**
 * Remove an Items
 */
class wCallBackOfficeItemRemoveProcessor extends modObjectProcessor {
	public $objectType = 'wCallBackItem';
	public $classKey = 'wCallBackItem';
	public $languageTopics = array('wcallback');
	//public $permission = 'remove';


	/**
	 * @return array|string
	 */
	public function process() {
		if (!$this->checkPermissions()) {
			return $this->failure($this->modx->lexicon('access_denied'));
		}

		$ids = $this->modx->fromJSON($this->getProperty('ids'));
		if (empty($ids)) {
			return $this->failure($this->modx->lexicon('wcallback_item_err_ns'));
		}

		foreach ($ids as $id) {
			/** @var wCallBackItem $object */
			if (!$object = $this->modx->getObject($this->classKey, $id)) {
				return $this->failure($this->modx->lexicon('wcallback_item_err_nf'));
			}

			$object->remove();
		}

		return $this->success();
	}

}

return 'wCallBackOfficeItemRemoveProcessor';