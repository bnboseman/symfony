<?php

namespace ProjectManagerBundle\Entity;

/**
 * Discussions
 */
class Discussions
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
    private $assignedTo = '';

    /**
     * @var \ProjectManagerBundle\Entity\Projects
     */
    private $project;

    /**
     * @var \ProjectManagerBundle\Entity\Users
     */
    private $user;

    /**
     * @var \ProjectManagerBundle\Entity\DiscussionStatus
     */
    private $discussionStatus;


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
     * @return Discussions
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
     * @return Discussions
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
     * @return Discussions
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
     * Set project
     *
     * @param \ProjectManagerBundle\Entity\Projects $project
     *
     * @return Discussions
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
     * Set user
     *
     * @param \ProjectManagerBundle\Entity\Users $user
     *
     * @return Discussions
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
     * Set discussionStatus
     *
     * @param \ProjectManagerBundle\Entity\DiscussionStatus $discussionStatus
     *
     * @return Discussions
     */
    public function setDiscussionStatus(\ProjectManagerBundle\Entity\DiscussionStatus $discussionStatus = null)
    {
        $this->discussionStatus = $discussionStatus;

        return $this;
    }

    /**
     * Get discussionStatus
     *
     * @return \ProjectManagerBundle\Entity\DiscussionStatus
     */
    public function getDiscussionStatus()
    {
        return $this->discussionStatus;
    }
}

