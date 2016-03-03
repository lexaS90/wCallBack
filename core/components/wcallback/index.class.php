<?php
/**
 * Class wCallBackMainController
 */
abstract class wCallBackMainController extends modExtraManagerController {
	/** @var wCallBack $wCallBack */
	public $wCallBack;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('wcallback_core_path', null, $this->modx->getOption('core_path') . 'components/wcallback/');
		require_once $corePath . 'model/wcallback/wcallback.class.php';

		$this->wCallBack = new wCallBack($this->modx);
		//$this->addCss($this->wCallBack->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->wCallBack->config['jsUrl'] . 'mgr/wcallback.js');
		$this->addHtml('
		<script type="text/javascript">
			wCallBack.config = ' . $this->modx->toJSON($this->wCallBack->config) . ';
			wCallBack.config.connector_url = "' . $this->wCallBack->config['connectorUrl'] . '";
		</script>
		');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('wcallback:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends wCallBackMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}