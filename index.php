<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();

//Using component
$document = new MyComponent;
$document->textWidth = 100;
echo $document->textWidth;
$document->completed = true; // can't get this property
echo $document->textHeight; // can't set this property

$document->onClicked = function($event){
    echo "This is onClick method by event<br>";
};

