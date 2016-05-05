<?php

namespace ProjectManagerBundle\Entity;

/**
 * Versions
 */
class Versions
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
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $dueDate;

    /**
     * @var \ProjectManagerBundle\Entity\Projects
     */
    private $project;

    /**
     * @var \ProjectManagerBundle\Entity\VersionStatus
     */
    private $versionStatus;


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
     * @return Versions
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
     * Set description
     *
     * @param string $description
     *
     * @return Versions
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     *
     * @return Versions
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set project
     *
     * @param \ProjectManagerBundle\Entity\Projects $project
     *
     * @return Versions
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

    /**
     * Set versionStatus
     *
     * @param \ProjectManagerBundle\Entity\VersionStatus $versionStatus
     *
     * @return Versions
     */
    public function setVersionStatus(\ProjectManagerBundle\Entity\VersionStatus $versionStatus = null)
    {
        $this->versionStatus = $versionStatus;

        return $this;
    }

    /**
     * Get versionStatus
     *
     * @return \ProjectManagerBundle\Entity\VersionStatus
     */
    public function getVersionStatus()
    {
        return $this->versionStatus;
    }
}

