<?php

namespace ProjectManagerBundle\Entity;

/**
 * ProjectPhases
 */
class ProjectPhases
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
     * @var \DateTime
     */
    private $dueDate;

    /**
     * @var \ProjectManagerBundle\Entity\Projects
     */
    private $project;

    /**
     * @var \ProjectManagerBundle\Entity\PhaseStatus
     */
    private $phaseStatus;


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
     * @return ProjectPhases
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
     * Set dueDate
     *
     * @param \DateTime $dueDate
     *
     * @return ProjectPhases
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
     * @return ProjectPhases
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
     * Set phaseStatus
     *
     * @param \ProjectManagerBundle\Entity\PhaseStatus $phaseStatus
     *
     * @return ProjectPhases
     */
    public function setPhaseStatus(\ProjectManagerBundle\Entity\PhaseStatus $phaseStatus = null)
    {
        $this->phaseStatus = $phaseStatus;

        return $this;
    }

    /**
     * Get phaseStatus
     *
     * @return \ProjectManagerBundle\Entity\PhaseStatus
     */
    public function getPhaseStatus()
    {
        return $this->phaseStatus;
    }
}

