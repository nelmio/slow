<?php

namespace Nelmio\SlowBundle\Model;

class SlowManager
{
    private $cracker;
    private $bob;
    private $sleepyhead;
    private $treeBuilder;
    private $resizer;

    public function __construct(Cracker $cracker, Bob $bob, Sleepyhead $sleepyhead, TreeBuilder $treeBuilder, Resizer $resizer = null)
    {
        $this->cracker = $cracker;
        $this->bob = $bob;
        $this->sleepyhead = $sleepyhead;
        $this->treeBuilder = $treeBuilder;
        $this->resizer = $resizer;
    }

    public function runCracker()
    {
        return $this->cracker->getData();
    }

    public function runSleepyhead()
    {
        return $this->sleepyhead->getData();
    }

    public function runResizer()
    {
        return $this->resizer->getData();
    }

    public function runBob()
    {
        return $this->bob->getData();
    }

    public function runTreeBuilder()
    {
        return $this->treeBuilder->getData();
    }
}
