<?php

namespace Record;

class Record {

    public function save($results) {

        foreach ($results as $item) {
            if (!empty($item)) {
                fputcsv($this->file, [$domain, $this->checkImageUrl($image[2], $domain)], ";");
            }
        }

    }
}