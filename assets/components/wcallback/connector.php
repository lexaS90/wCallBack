<?php
/** @noinspection PhpIncludeInspection */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var wCallBack $wCallBack */
$wCallBack = $modx->getService('wcallback', 'wCallBack', $modx->getOption('wcallback_core_path', null, $modx->getOption('core_path') . 'components/wcallback/') . 'model/wcallback/');
$modx->lexicon->load('wcallback:default');

// handle request
$corePath = $modx->getOption('wcallback_core_path', null, $modx->getOption('core_path') . 'components/wcallback/');
$path = $modx->getOption('processorsPath', $wCallBack->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));