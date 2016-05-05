<?php

namespace ProjectManagerBundle\Entity;

/**
 * ProjectReports
 */
class ProjectReports
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
     * @var integer
     */
    private $inTeam;

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var boolean
     */
    private $displayInMenu;

    /**
     * @var boolean
     */
    private $visibleOnHome;

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
     * @return ProjectReports
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
     * @return ProjectReports
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
     * @return ProjectReports
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
     * @return ProjectReports
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
     * @return ProjectReports
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
     * Set inTeam
     *
     * @param integer $inTeam
     *
     * @return ProjectReports
     */
    public function setInTeam($inTeam)
    {
        $this->inTeam = $inTeam;

        return $this;
    }

    /**
     * Get inTeam
     *
     * @return integer
     */
    public function getInTeam()
    {
        return $this->inTeam;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return ProjectReports
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
     * Set displayInMenu
     *
     * @param boolean $displayInMenu
     *
     * @return ProjectReports
     */
    public function setDisplayInMenu($displayInMenu)
    {
        $this->displayInMenu = $displayInMenu;

        return $this;
    }

    /**
     * Get displayInMenu
     *
     * @return boolean
     */
    public function getDisplayInMenu()
    {
        return $this->displayInMenu;
    }

    /**
     * Set visibleOnHome
     *
     * @param boolean $visibleOnHome
     *
     * @return ProjectReports
     */
    public function setVisibleOnHome($visibleOnHome)
    {
        $this->visibleOnHome = $visibleOnHome;

        return $this;
    }

    /**
     * Get visibleOnHome
     *
     * @return boolean
     */
    public function getVisibleOnHome()
    {
        return $this->visibleOnHome;
    }

    /**
     * Set user
     *
     * @param \ProjectManagerBundle\Entity\Users $user
     *
     * @return ProjectReports
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

