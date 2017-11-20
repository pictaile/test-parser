<?php

namespace Read;

class Read {
    private $opts;
    private $url;

    public function __construct(){
        $this->opts = array(

            'http' => array(
                'method' => "GET"
            )
        );

    }


    function byFileGetContents($url) {

        return file_get_contents($url, false, stream_context_create($this->opts));
    }

}