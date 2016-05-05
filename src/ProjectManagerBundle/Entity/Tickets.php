<?php

namespace ProjectManagerBundle\Entity;

/**
 * Tickets
 */
class Tickets
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
    private $createdAt;

    /**
     * @var \ProjectManagerBundle\Entity\TicketStatus
     */
    private $ticketStatus;

    /**
     * @var \ProjectManagerBundle\Entity\TicketTypes
     */
    private $ticketTypes;

    /**
     * @var \ProjectManagerBundle\Entity\Users
     */
    private $user;

    /**
     * @var \ProjectManagerBundle\Entity\Projects
     */
    private $project;

    /**
     * @var \ProjectManagerBundle\Entity\Departments
     */
    private $departments;


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
     * @return Tickets
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
     * @return Tickets
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Tickets
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
     * Set ticketStatus
     *
     * @param \ProjectManagerBundle\Entity\TicketStatus $ticketStatus
     *
     * @return Tickets
     */
    public function setTicketStatus(\ProjectManagerBundle\Entity\TicketStatus $ticketStatus = null)
    {
        $this->ticketStatus = $ticketStatus;

        return $this;
    }

    /**
     * Get ticketStatus
     *
     * @return \ProjectManagerBundle\Entity\TicketStatus
     */
    public function getTicketStatus()
    {
        return $this->ticketStatus;
    }

    /**
     * Set ticketTypes
     *
     * @param \ProjectManagerBundle\Entity\TicketTypes $ticketTypes
     *
     * @return Tickets
     */
    public function setTicketTypes(\ProjectManagerBundle\Entity\TicketTypes $ticketTypes = null)
    {
        $this->ticketTypes = $ticketTypes;

        return $this;
    }

    /**
     * Get ticketTypes
     *
     * @return \ProjectManagerBundle\Entity\TicketTypes
     */
    public function getTicketTypes()
    {
        return $this->ticketTypes;
    }

    /**
     * Set user
     *
     * @param \ProjectManagerBundle\Entity\Users $user
     *
     * @return Tickets
     */
    public function setUser(\ProjectManagerBundle\Entity\Users $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ProjectManagerBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set project
     *
     * @param \ProjectManagerBundle\Entity\Projects $project
     *
     * @return Tickets
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
     * Set departments
     *
     * @param \ProjectManagerBundle\Entity\Departments $departments
     *
     * @return Tickets
     */
    public function setDepartments(\ProjectManagerBundle\Entity\Departments $departments = null)
    {
        $this->departments = $departments;

        return $this;
    }

    /**
     * Get departments
     *
     * @return \ProjectManagerBundle\Entity\Departments
     */
    public function getDepartments()
    {
        return $this->departments;
    }
}

