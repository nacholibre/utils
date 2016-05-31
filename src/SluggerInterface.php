<?php

namespace Nacholibre\Utils;

interface SluggerInterface {
    public function slugify($string, $separator = '-');
}
