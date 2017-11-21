<?php

namespace Reader;


class ReaderXml implements Reader {

    private $url;


    function read($file) {
        $xml=simplexml_load_file($file);

        return $xml;
    }

}