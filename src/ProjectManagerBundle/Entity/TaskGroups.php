<?php

namespace ProjectManagerBundle\Entity;

/**
 * TaskGroups
 */
class TaskGroups
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var \ProjectManagerBundle\Entity\Projects
     */
    private $project;


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
     *
     * @return TaskGroups
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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

    /**
     * Set project
     *
     * @param \ProjectManagerBundle\Entity\Projects $project
     *
     * @return TaskGroups
     */
    public function setProject(\ProjectManagerBundle\Entity\Projects $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \ProjectManagerBundle\Entity\Projects
     */
    public function getProject()
    {
        return $this->project;
    }
}

