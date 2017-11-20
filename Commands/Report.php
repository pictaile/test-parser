<?php

namespace Commands;

use Commands\IRun;

class Report implements IRun {

    private $url;

    public function run() {
        echo "report";
        return true;
    }
}