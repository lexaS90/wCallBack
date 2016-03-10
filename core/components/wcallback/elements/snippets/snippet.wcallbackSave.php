<?php
$wcallback = $modx->getService('wcallback','wcallback',$modx->getOption('wcallback_core_path').'model/wcallback/');

$processorProps = array(
    'name' => $hook->getValue('name'),
	'description' => $hook->getValue('description'),
	'mail' => $hook->getValue('email'),
	'phone' =>  $hook->getValue('phone'),
	'category' => 't',
	'active' => 1,
);

$w = $modx->newObject('wCallBackItem',1);

$w->fromArray($processorProps);

$w->save();



return true;


/*
$otherProps = array(
    
    'processors_path' =>$modx->getOption('base_path').'wCallBack/core/components/wcallback/processors/'
);

$response = $modx->runProcessor('mgr/item/create.class', $processorProps, $otherProps);

echo ($response->response);*/