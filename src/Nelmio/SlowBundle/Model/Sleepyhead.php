<?php

namespace Nelmio\SlowBundle\Model;

class Sleepyhead
{
    public function __construct()
    {
    }

    public function getData()
    {
        usleep(rand(500,1500));
        return 'ZZzzzz';
    }
}
