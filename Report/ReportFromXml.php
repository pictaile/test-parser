<?php

namespace Report;
use Layers\Url;
use Reader\ReaderXml;

Class ReportFromXml {

    private $url;
    private $elem;
    private $read;
    private $record;

    public function __construct($url) {
        $this->read = new ReaderXml();
        $this->url = new Url($url);

    }

    public function report() {
        $data = $this->read->read($this->url->getHost().".xml");
        return $data;
    }

}