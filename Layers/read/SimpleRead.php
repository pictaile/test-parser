<?php

namespace Read;

class SimpleRead {
    private $url;

    public function __construct(){
        $this->opts = stream_context_create([
            'http' => [
                'method' => "GET",
                'header' => implode('\r\n', ["Accept-language: en", "Cookie: foo=bar"])
            ]
        ]);
    }

    public function setUrl($url){
        $this->url = $url;

        return $this;
    }

    public function getData() {
        return file_get_contents( $this->url, false, $this->opts);
    }
}