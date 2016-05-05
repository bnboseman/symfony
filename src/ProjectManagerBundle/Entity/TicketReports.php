<?php

namespace ProjectManagerBundle\Entity;

/**
 * TicketReports
 */
class TicketReports
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
     * @var boolean
     */
    private $displayOnHome;

    /**
     * @var string
     */
    private $projectId;

    /**
     * @var string
     */
    private $projectTypeId;

    /**
     * @var string
     */
    private $projectStatusId;

    /**
     * @var string
     */
    private $departmentsId;

    /**
     * @var string
     */
    private $ticketTypesId;

    /**
     * @var string
     */
    private $ticketStatusId;

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var \ProjectManagerBundle\Entity\Users
     */
    private $user;


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
     * @return TicketReports
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
     * Set displayOnHome
     *
     * @param boolean $displayOnHome
     *
     * @return TicketReports
     */
    public function setDisplayOnHome($displayOnHome)
    {
        $this->displayOnHome = $displayOnHome;

        return $this;
    }

    /**
     * Get displayOnHome
     *
     * @return boolean
     */
    public function getDisplayOnHome()
    {
        return $this->displayOnHome;
    }

    /**
     * Set projectId
     *
     * @param string $projectId
     *
     * @return TicketReports
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Get projectId
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set projectTypeId
     *
     * @param string $projectTypeId
     *
     * @return TicketReports
     */
    public function setProjectTypeId($projectTypeId)
    {
        $this->projectTypeId = $projectTypeId;

        return $this;
    }

    /**
     * Get projectTypeId
     *
     * @return string
     */
    public function getProjectTypeId()
    {
        return $this->projectTypeId;
    }

    /**
     * Set projectStatusId
     *
     * @param string $projectStatusId
     *
     * @return TicketReports
     */
    public function setProjectStatusId($projectStatusId)
    {
        $this->projectStatusId = $projectStatusId;

        return $this;
    }

    /**
     * Get projectStatusId
     *
     * @return string
     */
    public function getProjectStatusId()
    {
        return $this->projectStatusId;
    }

    /**
     * Set departmentsId
     *
     * @param string $departmentsId
     *
     * @return TicketReports
     */
    public function setDepartmentsId($departmentsId)
    {
        $this->departmentsId = $departmentsId;

        return $this;
    }

    /**
     * Get departmentsId
     *
     * @return string
     */
    public function getDepartmentsId()
    {
        return $this->departmentsId;
    }

    /**
     * Set ticketTypesId
     *
     * @param string $ticketTypesId
     *
     * @return TicketReports
     */
    public function setTicketTypesId($ticketTypesId)
    {
        $this->ticketTypesId = $ticketTypesId;

        return $this;
    }

    /**
     * Get ticketTypesId
     *
     * @return string
     */
    public function getTicketTypesId()
    {
        return $this->ticketTypesId;
    }

    /**
     * Set ticketStatusId
     *
     * @param string $ticketStatusId
     *
     * @return TicketReports
     */
    public function setTicketStatusId($ticketStatusId)
    {
        $this->ticketStatusId = $ticketStatusId;

        return $this;
    }

    /**
     * Get ticketStatusId
     *
     * @return string
     */
    public function getTicketStatusId()
    {
        return $this->ticketStatusId;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return TicketReports
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return integer
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set user
     *
     * @param \ProjectManagerBundle\Entity\Users $user
     *
     * @return TicketReports
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
}

