<?php

namespace ProjectManagerBundle\Entity;

/**
 * TaskComments
 */
class TaskComments
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dueDate;

    /**
     * @var float
     */
    private $workedHours;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var integer
     */
    private $progress;

    /**
     * @var \ProjectManagerBundle\Entity\Tasks
     */
    private $task;

    /**
     * @var \ProjectManagerBundle\Entity\Users
     */
    private $createdBy;

    /**
     * @var \ProjectManagerBundle\Entity\TaskStatus
     */
    private $taskStatus;

    /**
     * @var \ProjectManagerBundle\Entity\TaskPriority
     */
    private $taskPriority;


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
     * Set dueDate
     *
     * @param \DateTime $dueDate
     *
     * @return TaskComments
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
     * Set workedHours
     *
     * @param float $workedHours
     *
     * @return TaskComments
     */
    public function setWorkedHours($workedHours)
    {
        $this->workedHours = $workedHours;

        return $this;
    }

    /**
     * Get workedHours
     *
     * @return float
     */
    public function getWorkedHours()
    {
        return $this->workedHours;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TaskComments
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
     * @return TaskComments
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
     * Set progress
     *
     * @param integer $progress
     *
     * @return TaskComments
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
     * Set task
     *
     * @param \ProjectManagerBundle\Entity\Tasks $task
     *
     * @return TaskComments
     */
    public function setTask(\ProjectManagerBundle\Entity\Tasks $task = null)
    {
        $this->task = $task;

        return $this;
    }

    /**
     * Get task
     *
     * @return \ProjectManagerBundle\Entity\Tasks
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Set createdBy
     *
     * @param \ProjectManagerBundle\Entity\Users $createdBy
     *
     * @return TaskComments
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

    /**
     * Set taskStatus
     *
     * @param \ProjectManagerBundle\Entity\TaskStatus $taskStatus
     *
     * @return TaskComments
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
     * @return TaskComments
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
}

