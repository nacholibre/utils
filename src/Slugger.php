<?php

namespace nacholibre\Utils;

class Slugger implements SluggerInterface {
    public function slugify($string, $separator = '-') {
        $name = mb_strtolower($name, 'utf8');

        $name = preg_replace('/[\p{P}]+/u', ' ', $name);

        $name = preg_replace('/\s+/', ' ', $name);

        $name = trim($name);
        $name = str_replace(' ', $separator, $name);

        return $name;
    }
}
