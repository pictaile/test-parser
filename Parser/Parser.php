<?php

namespace Parser;
use Layers\Url;
use Parser\iParse;
use Record\Record;

Class Parser {

    private $url;
    private $elem;

    public function __construct($url,  $class) {
        $this->elem = new $class( new Url($url));
        $this->record = new Record();
    }



    public function parse() {
        return $this->elem->parse();
    }

}