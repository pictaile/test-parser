<?php

namespace Parser;
use Parser\iParse;
use Layers\Url;

class ImageParser implements iParse {
    private $url;
    public function __construct(){

    }

    public function parse($data) {
        $res = $this->generateUrl($data);
       return $res;
    }

    public function generateUrl($data){
        $img = []; $res = [];
        preg_match_all('/<img[^>]+>/i', $data, $result);
        foreach ($result[0] as $tag) {
            preg_match_all('/(src)=("[^"]*")/i', $tag, $imgs, PREG_SET_ORDER);
            $res[] = (string)@$imgs[0][0];
        }
        return $res;
   }
}