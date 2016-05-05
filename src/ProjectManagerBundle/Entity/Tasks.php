<?php

namespace ProjectManagerBundle\Entity;

/**
 * Tasks
 */
class Tasks
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
    private $assignedTo;

    /**
     * @var float
     */
    private $estimatedTime;

    /**
     * @var \DateTime
     */
    private $dueDate;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $closedDate;

    /**
     * @var integer
     */
    private $discussionId;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var integer
     */
    private $progress;

    /**
     * @var \ProjectManagerBundle\Entity\Projects
     */
    private $project;

    /**
     * @var \ProjectManagerBundle\Entity\Tickets
     */
    private $ticket;

    /**
     * @var \ProjectManagerBundle\Entity\TaskStatus
     */
    private $taskStatus;

    /**
     * @var \ProjectManagerBundle\Entity\TaskPriority
     */
    private $taskPriority;

    /**
     * @var \ProjectManagerBundle\Entity\TaskTypes
     */
    private $taskType;

    /**
     * @var \ProjectManagerBundle\Entity\TaskLabels
     */
    private $taskLabel;

    /**
     * @var \ProjectManagerBundle\Entity\TaskGroups
     */
    private $taskGroups;

    /**
     * @var \ProjectManagerBundle\Entity\ProjectPhases
     */
    private $projectPhase;

    /**
     * @var \ProjectManagerBundle\Entity\Versions
     */
    private $version;

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
     * @return Tasks
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
     * @return Tasks
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
     * Set assignedTo
     *
     * @param string $assignedTo
     *
     * @return Tasks
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
     * Set estimatedTime
     *
     * @param float $estimatedTime
     *
     * @return Tasks
     */
    public function setEstimatedTime($estimatedTime)
    {
        $this->estimatedTime = $estimatedTime;

        return $this;
    }

    /**
     * Get estimatedTime
     *
     * @return float
     */
    public function getEstimatedTime()
    {
        return $this->estimatedTime;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     *
     * @return Tasks
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Tasks
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
     * Set closedDate
     *
     * @param \DateTime $closedDate
     *
     * @return Tasks
     */
    public function setClosedDate($closedDate)
    {
        $this->closedDate = $closedDate;

        return $this;
    }

    /**
     * Get closedDate
     *
     * @return \DateTime
     */
    public function getClosedDate()
    {
        return $this->closedDate;
    }

    /**
     * Set discussionId
     *
     * @param integer $discussionId
     *
     * @return Tasks
     */
    public function setDiscussionId($discussionId)
    {
        $this->discussionId = $discussionId;

        return $this;
    }

    /**
     * Get discussionId
     *
     * @return integer
     */
    public function getDiscussionId()
    {
        return $this->discussionId;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Tasks
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set progress
     *
     * @param integer $progress
     *
     * @return Tasks
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;

        return $this;
    }

    /**
     * Get progress
     *
     * @return integer
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Set project
     *
     * @param \ProjectManagerBundle\Entity\Projects $project
     *
     * @return Tasks
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
     * Set ticket
     *
     * @param \ProjectManagerBundle\Entity\Tickets $ticket
     *
     * @return Tasks
     */
    public function setTicket(\ProjectManagerBundle\Entity\Tickets $ticket = null)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return \ProjectManagerBundle\Entity\Tickets
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Set taskStatus
     *
     * @param \ProjectManagerBundle\Entity\TaskStatus $taskStatus
     *
     * @return Tasks
     */
    public function setTaskStatus(\ProjectManagerBundle\Entity\TaskStatus $taskStatus = null)
    {
        $this->taskStatus = $taskStatus;

        return $this;
    }

    /**
     * Get taskStatus
     *
     * @return \ProjectManagerBundle\Entity\TaskStatus
     */
    public function getTaskStatus()
    {
        return $this->taskStatus;
    }

    /**
     * Set taskPriority
     *
     * @param \ProjectManagerBundle\Entity\TaskPriority $taskPriority
     *
     * @return Tasks
     */
    public function setTaskPriority(\ProjectManagerBundle\Entity\TaskPriority $taskPriority = null)
    {
        $this->taskPriority = $taskPriority;

        return $this;
    }

    /**
     * Get taskPriority
     *
     * @return \ProjectManagerBundle\Entity\TaskPriority
     */
    public function getTaskPriority()
    {
        return $this->taskPriority;
    }

    /**
     * Set taskType
     *
     * @param \ProjectManagerBundle\Entity\TaskTypes $taskType
     *
     * @return Tasks
     */
    public function setTaskType(\ProjectManagerBundle\Entity\TaskTypes $taskType = null)
    {
        $this->taskType = $taskType;

        return $this;
    }

    /**
     * Get taskType
     *
     * @return \ProjectManagerBundle\Entity\TaskTypes
     */
    public function getTaskType()
    {
        return $this->taskType;
    }

    /**
     * Set taskLabel
     *
     * @param \ProjectManagerBundle\Entity\TaskLabels $taskLabel
     *
     * @return Tasks
     */
    public function setTaskLabel(\ProjectManagerBundle\Entity\TaskLabels $taskLabel = null)
    {
        $this->taskLabel = $taskLabel;

        return $this;
    }

    /**
     * Get taskLabel
     *
     * @return \ProjectManagerBundle\Entity\TaskLabels
     */
    public function getTaskLabel()
    {
        return $this->taskLabel;
    }

    /**
     * Set taskGroups
     *
     * @param \ProjectManagerBundle\Entity\TaskGroups $taskGroups
     *
     * @return Tasks
     */
    public function setTaskGroups(\ProjectManagerBundle\Entity\TaskGroups $taskGroups = null)
    {
        $this->taskGroups = $taskGroups;

        return $this;
    }

    /**
     * Get taskGroups
     *
     * @return \ProjectManagerBundle\Entity\TaskGroups
     */
    public function getTaskGroups()
    {
        return $this->taskGroups;
    }

    /**
     * Set projectPhase
     *
     * @param \ProjectManagerBundle\Entity\ProjectPhases $projectPhase
     *
     * @return Tasks
     */
    public function setProjectPhase(\ProjectManagerBundle\Entity\ProjectPhases $projectPhase = null)
    {
        $this->projectPhase = $projectPhase;

        return $this;
    }

    /**
     * Get projectPhase
     *
     * @return \ProjectManagerBundle\Entity\ProjectPhases
     */
    public function getProjectPhase()
    {
        return $this->projectPhase;
    }

    /**
     * Set version
     *
     * @param \ProjectManagerBundle\Entity\Versions $version
     *
     * @return Tasks
     */
    public function setVersion(\ProjectManagerBundle\Entity\Versions $version = null)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return \ProjectManagerBundle\Entity\Versions
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set createdBy
     *
     * @param \ProjectManagerBundle\Entity\Users $createdBy
     *
     * @return Tasks
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

