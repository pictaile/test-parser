<?php

namespace Parser;
use Parser\iParse;
use Layers\Url;

class ImageParser implements iParse {
    private $url;
    public function __construct(){

    }



    public function parse($data) {
        preg_match_all('/<img[^>]+>/i', $data, $result);
        foreach ($result[0] as $tag) {
            preg_match_all('/(src)=("[^"]*")/i', $tag, $img, PREG_SET_ORDER);
        }
        return $img;
    }
}