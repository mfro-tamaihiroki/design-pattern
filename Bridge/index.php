<?php
// require_once地獄(composerが使えない為)
require_once('App/Bridge/Interface/FileDataManageInterface.php');
require_once('App/Bridge/JsonFileDataManage.php');
require_once('App/Bridge/Interface/OutputInterface.php');
require_once('App/Bridge/Interface/ReadFileInterface.php');
require_once('App/Bridge/CsvFileDataManage.php');
require_once('App/Bridge/Output.php');
require_once('App/Bridge/OutputAuto.php');
require_once ('App/Bridge/ReadFactory.php');
require_once ('App/Bridge/JsonReadFile.php');
require_once ('App/Bridge/ListOutput.php');
require_once ('App/Bridge/TableOutput.php');


$json_path = 'App/File/data.json';
$csv_path = 'App/File/data.csv';

use App\Bridge\ListOutput;
use App\Bridge\JsonReadFile;
use App\Bridge\TableOutput;



$jsonOutput = new ListOutput(new JsonReadFile($json_path));
$jsonOutput->output();

$jsonOutput = new TableOutput(new JsonReadFile($json_path));
$jsonOutput->output();


// ひとまずコメントアウトで勘弁して下さい
//use App\Bridge\ReadFactory;

//echo('<h1>CSVの表示</h1>');
//$json = ReadFactory::createOutputAuto(ReadFactory::READ_TYPE_JSON, $json_path);
//$json->read();
//$json->autoDisplay();
//
//
//echo('<h1>JSONの表示</h1>');
//$json = ReadFactory::createOutputAuto(ReadFactory::READ_TYPE_CSV, $csv_path);
//$json->read();
//$json->autoDisplay();