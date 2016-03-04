<?php
$processorProps = array(
    'name' => 'vasia4',
	'description' => 'test',
	'mail' => '',
	'phone' => '',
	'category' => '',
	'active' => 1,
);

$wcallback = $modx->getService('wcallback','wcallback',$modx->getOption('wcallback_core_path').'model/wcallback/');

$w = $modx->newObject('wCallBackItem',1);

$w->fromArray($processorProps);

$w->save();



var_dump($w);


/*
$otherProps = array(
    
    'processors_path' =>$modx->getOption('base_path').'wCallBack/core/components/wcallback/processors/'
);

$response = $modx->runProcessor('mgr/item/create.class', $processorProps, $otherProps);

echo ($response->response);*/