<?php

namespace Nelmio\SlowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class RunController extends Controller
{
    /**
     * @Route("/cracker/", name="cracker")
     * @Template("NelmioSlowBundle:Run:single.html.twig")
     */
    public function crackerAction($layout = true)
    {
        $manager = $this->get('nelmio_slow.slow_manager');

        return array(
            'layout' => $layout,
            'name' => 'cracker',
            'result' => $manager->runCracker()
        );
    }

    /**
     * @Route("/bob/", name="bob")
     * @Template("NelmioSlowBundle:Run:single.html.twig")
     */
    public function bobAction($layout = true)
    {
        $manager = $this->get('nelmio_slow.slow_manager');

        return array(
            'layout' => $layout,
            'name' => 'bob',
            'result' => $manager->runBob()
        );
    }

    /**
     * @Route("/tree-builder/", name="tree_builder")
     * @Template()
     */
    public function treeBuilderAction($layout = true)
    {
        $manager = $this->get('nelmio_slow.slow_manager');

        return array(
            'layout' => $layout,
            'name' => 'tree builder',
            'result' => $manager->runTreeBuilder()
        );
    }

    /**
     * @Route("/sleepyhead/", name="sleepyhead")
     * @Template("NelmioSlowBundle:Run:single.html.twig")
     */
    public function sleepyheadAction($layout = true)
    {
        $manager = $this->get('nelmio_slow.slow_manager');

        return array(
            'layout' => $layout,
            'name' => 'sleepyhead',
            'result' => $manager->runSleepyhead()
        );
    }

    /**
     * @Route("/resizer/", name="resizer")
     * @Template("NelmioSlowBundle:Run:single.html.twig")
     */
    public function resizerAction($layout = true)
    {
        $manager = $this->get('nelmio_slow.slow_manager');

        return array(
            'layout' => $layout,
            'name' => 'resizer',
            'result' => $manager->runResizer()
        );
    }
}
