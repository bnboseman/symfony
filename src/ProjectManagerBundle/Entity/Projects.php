<?php

namespace ProjectManagerBundle\Entity;

/**
 * Projects
 */
class Projects
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
     * @var string
     */
    private $team;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $orderTaskBy;

    /**
     * @var \ProjectManagerBundle\Entity\ProjectStatus
     */
    private $projectStatus;

    /**
     * @var \ProjectManagerBundle\Entity\ProjectTypes
     */
    private $projectTypes;

    /**
     * @var \ProjectManagerBundle\Entity\Users
     */
    private $createdBy;


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
     * @return Projects
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
     * @return Projects
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
     * Set team
     *
     * @param string $team
     *
     * @return Projects
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return string
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Projects
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set orderTaskBy
     *
     * @param string $orderTaskBy
     *
     * @return Projects
     */
    public function setOrderTaskBy($orderTaskBy)
    {
        $this->orderTaskBy = $orderTaskBy;

        return $this;
    }

    /**
     * Get orderTaskBy
     *
     * @return string
     */
    public function getOrderTaskBy()
    {
        return $this->orderTaskBy;
    }

    /**
     * Set projectStatus
     *
     * @param \ProjectManagerBundle\Entity\ProjectStatus $projectStatus
     *
     * @return Projects
     */
    public function setProjectStatus(\ProjectManagerBundle\Entity\ProjectStatus $projectStatus = null)
    {
        $this->projectStatus = $projectStatus;

        return $this;
    }

    /**
     * Get projectStatus
     *
     * @return \ProjectManagerBundle\Entity\ProjectStatus
     */
    public function getProjectStatus()
    {
        return $this->projectStatus;
    }

    /**
     * Set projectTypes
     *
     * @param \ProjectManagerBundle\Entity\ProjectTypes $projectTypes
     *
     * @return Projects
     */
    public function setProjectTypes(\ProjectManagerBundle\Entity\ProjectTypes $projectTypes = null)
    {
        $this->projectTypes = $projectTypes;

        return $this;
    }

    /**
     * Get projectTypes
     *
     * @return \ProjectManagerBundle\Entity\ProjectTypes
     */
    public function getProjectTypes()
    {
        return $this->projectTypes;
    }

    /**
     * Set createdBy
     *
     * @param \ProjectManagerBundle\Entity\Users $createdBy
     *
     * @return Projects
     */
    public function setCreatedBy(\ProjectManagerBundle\Entity\Users $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \ProjectManagerBundle\Entity\Users
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
}

