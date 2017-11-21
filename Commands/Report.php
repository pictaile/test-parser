<?php

namespace Commands;

use Commands\IRun;
use Parser\iParse;
use Record\RecordXml;
use Reader\Reader;
use Reader\SimpleReader;
use Report\ReportFromXml;


class Report implements IRun {

    private $report;
    public function __construct($url) {
        $this->report = new ReportFromXml($url);

    }

    public function run() {
        print_r($this->report->report());
        return true;
    }
}