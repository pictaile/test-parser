#!/usr/bin/php
<?php

namespace Commands;
require_once(dirname(__FILE__)."/../vendor/autoload.php");


use Commands\Parse;
use Commands\Report;
use Commands\Help;

const COMMAND_PARSE = 'parse';
const COMMAND_REPORT = 'report';
const COMMAND_HELP = 'help';

$func = (string)@$_SERVER['argv'][1];
$param = (string)@$_SERVER['argv'][2];

try {

    switch ($func) {
        case COMMAND_PARSE:
            $command = new Parse($param);
        break;
        case COMMAND_REPORT:
            $command = new Report($param);
        break;
        case COMMAND_HELP:
            $command = new Help();
        break;
        default:
            throw new \Exception("Invalid function");
    }

    $command->run();

} catch (\Exception $e) {
    echo $e->getMessage();
}


