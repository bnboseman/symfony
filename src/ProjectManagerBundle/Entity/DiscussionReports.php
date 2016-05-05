<?php

namespace ProjectManagerBundle\Entity;

/**
 * DiscussionReports
 */
class DiscussionReports
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
    private $discussionStatusId;

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
     * @return DiscussionReports
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
     * @return DiscussionReports
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
     * @return DiscussionReports
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
     * @return DiscussionReports
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
     * @return DiscussionReports
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
     * Set discussionStatusId
     *
     * @param string $discussionStatusId
     *
     * @return DiscussionReports
     */
    public function setDiscussionStatusId($discussionStatusId)
    {
        $this->discussionStatusId = $discussionStatusId;

        return $this;
    }

    /**
     * Get discussionStatusId
     *
     * @return string
     */
    public function getDiscussionStatusId()
    {
        return $this->discussionStatusId;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return DiscussionReports
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
     * @return DiscussionReports
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

