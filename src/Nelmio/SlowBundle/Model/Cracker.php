<?php

namespace Nelmio\SlowBundle\Model;

class Cracker
{
    protected $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function getData()
    {
        file_put_contents($this->file, '0');
        for ($i = 0; $i < 400; $i++) {
            file_put_contents($this->file, file_get_contents($this->file) + 1);
        }
        return file_get_contents($this->file);
    }
}
