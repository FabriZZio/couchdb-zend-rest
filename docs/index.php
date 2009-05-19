<?php
// error reporting
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 1);

// add to include path
set_include_path('../library/' . PATH_SEPARATOR . get_include_path());

// require framework components
require_once 'Zend/Json.php';
require_once 'Zend/Rest/Client.php';
require_once 'Zend/Debug.php';

// client
$client = new Zend_Rest_Client('http://localhost:5984');

// get json document
//$response = $client->restGet('test/7f946f88d4b38b363a26c16bdbc5bc77');

// get data in array
//$arrayData = Zend_Json::decode($response->getBody());

// change values
//$arrayData['title'] = '"update!' . time() . '"';

// update record
//$response = $client->restPut('test/7f946f88d4b38b363a26c16bdbc5bc77', Zend_Json::encode($arrayData));

/*$arrayData = array();
$arrayData['title2'] = '"title2"';

// add new record
$response = $client->restPost('test', Zend_Json::encode($arrayData));

Zend_Debug::dump($response);*/

// get data in array
//$arrayData = Zend_Json::decode($response->getBody());

// get all documents
//$response = $client->restGet('test/_all_docs');

// view
$viewArray = array();
$viewArray['map'] = 'function(doc){ if (doc.title) { emit(doc.title, doc); } }';

$response = $client->restPost('test/_temp_view', Zend_Json::encode($viewArray));

Zend_Debug::dump($response);
exit();
?>
