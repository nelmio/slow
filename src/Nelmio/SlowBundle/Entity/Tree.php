<?php

namespace Nelmio\SlowBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nelmio\SlowBundle\Entity\Tree
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nelmio\SlowBundle\Entity\TreeRepository")
 */
class Tree
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Nelmio\SlowBundle\Entity\Tree", mappedBy="parent")
     */
    private $children;

    /**
     * @ORM\ManyToOne(targetEntity="Nelmio\SlowBundle\Entity\Tree", inversedBy="children")
     */
    private $parent;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add children
     *
     * @param Nelmio\SlowBundle\Entity\Tree $child
     */
    public function addChild(Tree $child)
    {
        $this->children[] = $child;
    }

    /**
     * Get children
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param Nelmio\SlowBundle\Entity\Tree $parent
     */
    public function setParent(Tree $parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return Nelmio\SlowBundle\Entity\Tree
     */
    public function getParent()
    {
        return $this->parent;
    }
}