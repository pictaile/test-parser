<?php

namespace Parser;
use Parser\iParse;
use Layers\Url;

class ImageParser implements iParse {
    private $url;
    public function __construct(\Layers\Url $url){
        $this->url = $url;
    }

    public function parse() {
        echo $this->url->getDomain();
    }
}