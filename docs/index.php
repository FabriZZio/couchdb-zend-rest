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

// compose document
$document = array();
$document['title'] = 'document title';
$document['content'] = 'document content';

// JSON-ize document
$document = Zend_Json::encode($document);

// add document (use POST here)
$response = $client->restPost('test', $document);

// print response
Zend_Debug::dump($response);

// get document
$response = $client->restGet('test/c447a8366d74d880f35720d92d68419e');

// un-Json-ize document
$document = Zend_Json::decode($response->getBody());

// print document
Zend_Debug::dump($document);

// change values
$document['title'] = '"updated title!"';

// update document
$response = $client->restPut('test/c447a8366d74d880f35720d92d68419e', Zend_Json::encode($document));

// print response
Zend_Debug::dump($response);

// get all documents
$response = $client->restGet('test/_all_docs');

// print all docs
Zend_Debug::dump($response);

// next: views
?>
