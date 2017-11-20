<?php

namespace Commands;

use Commands\IRun;
use Parser\Parser;


class Parse implements IRun {

    private $parser;
    public function __construct($url) {
        $this->parser = new Parser($url, 'Parser\ImageParser');

    }

    public function run() {
        $this->parser->parse();
    }
}