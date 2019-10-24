<?php
require_once('App/Bridge/Interface/FileDataManageInterface.php');
require_once('App/Bridge/JsonFileDataManage.php');
require_once('App/Bridge/CsvFileDataManage.php');
require_once('App/Bridge/Output.php');
require_once('App/Bridge/OutputAuto.php');
require_once ('App/Bridge/ReadFactory.php');

use App\Bridge\ReadFactory;

$json_path = 'App/File/data.json';
$csv_path = 'App/File/data.csv';


echo('<h1>CSVの表示</h1>');
$json = ReadFactory::createOutputAuto(ReadFactory::READ_TYPE_JSON, $json_path);
$json->read();
$json->autoDisplay();


echo('<h1>JSONの表示</h1>');
$json = ReadFactory::createOutputAuto(ReadFactory::READ_TYPE_CSV, $csv_path);
$json->read();
$json->autoDisplay();