<?php

namespace Reader;


class SimpleReader implements Reader {
    private $opts;
    private $url;

    public function __construct(){
        $this->opts = array(

            'http' => array(
                'method' => "GET"
            )
        );

    }


    function read($url) {

        return file_get_contents($url, false, stream_context_create($this->opts));
    }

}