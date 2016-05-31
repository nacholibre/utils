<?php

namespace nacholibre\Utils;

interface SluggerInterface {
    public function slugify($string, $separator = '-');
}
