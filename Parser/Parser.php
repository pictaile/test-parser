<?php

namespace Parser;
use Layers\Url;
use Parser\iParse;
use Record\Record;
use Read\Read;

Class Parser {

    private $url;
    private $elem;
    private $read;
    private $record;

    public function __construct($url,  $class) {
        $this->elem = new $class();
        $this->read = new Read();
        $this->url = new Url($url);

        $this->record = new Record();
    }

    public function parse() {
        $data = $this->read->byFileGetContents($this->url->getDomain());
        $result = $this->elem->parse($data);
        $this->record->save($result);
    }

}