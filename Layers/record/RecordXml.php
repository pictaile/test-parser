<?php

namespace Record;
use Record\Record;

class RecordXml implements Record {

    public function save($result) {
        $xml = new \SimpleXMLElement('<xml/>');

        foreach ($result as $item) {
            $xml->addChild('item', $item);

         }

        file_put_contents('test.xml', $xml->asXML());
    }
}