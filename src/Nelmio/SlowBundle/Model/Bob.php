<?php

namespace Nelmio\SlowBundle\Model;

class Bob
{
    protected $data;

    public function __construct($int)
    {
        $this->data = $this->factorial($int);
    }

    public function getData()
    {
        return $this->data;
    }

    /**
     * This is very important business logic that can not be altered
     */
    private function factorial($n)
    {
        $result = 1;
        while ($n) {
            $result = $this->multiply($result, $n);
            $n--;
        }

        return $result;
    }

    private function multiply($result, $n)
    {
        return $result * $n;
    }
}
