<?php

namespace ProjectManagerBundle\Entity;

/**
 * UserReports
 */
class UserReports
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
    private $assignedTo;

    /**
     * @var string
     */
    private $taskStatusId;

    /**
     * @var string
     */
    private $taskTypeId;

    /**
     * @var string
     */
    private $taskLabelId;

    /**
     * @var \DateTime
     */
    private $dueDateFrom;

    /**
     * @var \DateTime
     */
    private $dueDateTo;

    /**
     * @var \DateTime
     */
    private $createdFrom;

    /**
     * @var \DateTime
     */
    private $createdTo;

    /**
     * @var \DateTime
     */
    private $closedFrom;

    /**
     * @var \DateTime
     */
    private $closedTo;

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
     * @return UserReports
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
     * @return UserReports
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
     * @return UserReports
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
     * @return UserReports
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
     * @return UserReports
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
     * Set assignedTo
     *
     * @param string $assignedTo
     *
     * @return UserReports
     */
    public function setAssignedTo($assignedTo)
    {
        $this->assignedTo = $assignedTo;

        return $this;
    }

    /**
     * Get assignedTo
     *
     * @return string
     */
    public function getAssignedTo()
    {
        return $this->assignedTo;
    }

    /**
     * Set taskStatusId
     *
     * @param string $taskStatusId
     *
     * @return UserReports
     */
    public function setTaskStatusId($taskStatusId)
    {
        $this->taskStatusId = $taskStatusId;

        return $this;
    }

    /**
     * Get taskStatusId
     *
     * @return string
     */
    public function getTaskStatusId()
    {
        return $this->taskStatusId;
    }

    /**
     * Set taskTypeId
     *
     * @param string $taskTypeId
     *
     * @return UserReports
     */
    public function setTaskTypeId($taskTypeId)
    {
        $this->taskTypeId = $taskTypeId;

        return $this;
    }

    /**
     * Get taskTypeId
     *
     * @return string
     */
    public function getTaskTypeId()
    {
        return $this->taskTypeId;
    }

    /**
     * Set taskLabelId
     *
     * @param string $taskLabelId
     *
     * @return UserReports
     */
    public function setTaskLabelId($taskLabelId)
    {
        $this->taskLabelId = $taskLabelId;

        return $this;
    }

    /**
     * Get taskLabelId
     *
     * @return string
     */
    public function getTaskLabelId()
    {
        return $this->taskLabelId;
    }

    /**
     * Set dueDateFrom
     *
     * @param \DateTime $dueDateFrom
     *
     * @return UserReports
     */
    public function setDueDateFrom($dueDateFrom)
    {
        $this->dueDateFrom = $dueDateFrom;

        return $this;
    }

    /**
     * Get dueDateFrom
     *
     * @return \DateTime
     */
    public function getDueDateFrom()
    {
        return $this->dueDateFrom;
    }

    /**
     * Set dueDateTo
     *
     * @param \DateTime $dueDateTo
     *
     * @return UserReports
     */
    public function setDueDateTo($dueDateTo)
    {
        $this->dueDateTo = $dueDateTo;

        return $this;
    }

    /**
     * Get dueDateTo
     *
     * @return \DateTime
     */
    public function getDueDateTo()
    {
        return $this->dueDateTo;
    }

    /**
     * Set createdFrom
     *
     * @param \DateTime $createdFrom
     *
     * @return UserReports
     */
    public function setCreatedFrom($createdFrom)
    {
        $this->createdFrom = $createdFrom;

        return $this;
    }

    /**
     * Get createdFrom
     *
     * @return \DateTime
     */
    public function getCreatedFrom()
    {
        return $this->createdFrom;
    }

    /**
     * Set createdTo
     *
     * @param \DateTime $createdTo
     *
     * @return UserReports
     */
    public function setCreatedTo($createdTo)
    {
        $this->createdTo = $createdTo;

        return $this;
    }

    /**
     * Get createdTo
     *
     * @return \DateTime
     */
    public function getCreatedTo()
    {
        return $this->createdTo;
    }

    /**
     * Set closedFrom
     *
     * @param \DateTime $closedFrom
     *
     * @return UserReports
     */
    public function setClosedFrom($closedFrom)
    {
        $this->closedFrom = $closedFrom;

        return $this;
    }

    /**
     * Get closedFrom
     *
     * @return \DateTime
     */
    public function getClosedFrom()
    {
        return $this->closedFrom;
    }

    /**
     * Set closedTo
     *
     * @param \DateTime $closedTo
     *
     * @return UserReports
     */
    public function setClosedTo($closedTo)
    {
        $this->closedTo = $closedTo;

        return $this;
    }

    /**
     * Get closedTo
     *
     * @return \DateTime
     */
    public function getClosedTo()
    {
        return $this->closedTo;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return UserReports
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
     * @return UserReports
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

