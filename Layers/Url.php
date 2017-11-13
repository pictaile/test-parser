<?php

namespace Layers;

class Url {
    private $url;
    private $parsed;
    public function __construct($urlStr){
        $this->parsed = parse_url($urlStr);
        if (empty( $this->parsed['scheme'])) {
            $this->url = 'http://' . ltrim($urlStr, '/');
        } else {
            $this->url = $this->parsed['scheme'] . "://". ltrim( $this->parsed['host'], '/');
        }
    }

    public function getDomain() {
        return $this->url;
    }

}