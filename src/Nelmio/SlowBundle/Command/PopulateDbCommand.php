<?php

namespace Nelmio\SlowBundle\Command;

use Nelmio\SlowBundle\Entity\Tree;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PopulateDbCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('slow:populate-db')
            ->setDescription('Create fixtures')
            ->setHelp(<<<EOT
EOT
            );
    }

    /**
     * @see Command
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');

        for ($i = 0; $i < 10; $i++) {
            $tree = new Tree;
            $em->persist($tree);
            $tree->setName($this->genName());

            for ($j = 0; $j < 10; $j++) {
                $subNode = new Tree;
                $em->persist($subNode);
                $subNode->setName($this->genName());
                $subNode->setParent($tree);

                for ($k = 0; $k < 10; $k++) {
                    $subSubNode = new Tree;
                    $em->persist($subSubNode);
                    $subSubNode->setName($this->genName());
                    $subSubNode->setParent($subNode);
                }
            }

            $em->flush();
        }
    }

    private function genName()
    {
        $name = '';
        $len = rand(4, 8);
        $vowels = array('a','e','i','o','u','y');
        $consonants = array('b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','z');

        for ($i = 0; $i < $len; $i++) {
            $name .= $i % 2 ? $vowels[array_rand($vowels)] : $consonants[array_rand($consonants)];
        }

        return $name;
    }
}