<?php

namespace xiang531039015;

class Hell
{

    private $str;

    public function __construct (String $str = '')
    {
        $this->str = $str;
    }

    public function out()
    {
        echo "Go to hell, ". $this->str;
    }
}