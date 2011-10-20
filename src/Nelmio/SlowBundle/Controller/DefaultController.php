<?php

namespace Nelmio\SlowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/noop/", name="noop")
     * @Template()
     */
    public function noopAction()
    {
        return array();
    }

    /**
     * @Route("/all/", name="all")
     * @Template()
     */
    public function slowAllAction()
    {
        $manager = $this->get('nelmio_slow.slow_manager');

        return array(
            'results' => array(
                'bob' => $manager->runSleepyhead(),
                'cracker' => $manager->runCracker(),
                'sleepyhead' => $manager->runBob(),
                'tree builder' => $manager->runTreeBuilder(),
                'resizer' => $manager->runResizer(),
            ),
        );
    }

    /**
     * @Route("/composed/", name="composed")
     * @Template()
     */
    public function composedAction()
    {
        return array();
    }
}
