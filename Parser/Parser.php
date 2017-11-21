<?php

namespace Parser;
use Layers\Url;
use Parser\iParse;
use Record\RecordXml;
use Reader\Reader;
use Reader\SimpleReader;

Class Parser {

    private $url;
    private $elem;
    private $read;
    private $record;

    public function __construct($url,  $class) {
        $this->elem = new $class();
        $this->read = new SimpleReader();
        $this->url = new Url($url);

        $this->record = new RecordXml( $this->url);
    }

    public function parse() {
        $data = $this->read->read($this->url->getDomain());
        $result = $this->elem->parse($data);
        $this->record->save($result);
    }

}