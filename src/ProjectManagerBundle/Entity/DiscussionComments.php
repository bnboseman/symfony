<?php

namespace ProjectManagerBundle\Entity;

/**
 * DiscussionComments
 */
class DiscussionComments
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \ProjectManagerBundle\Entity\Discussions
     */
    private $discussion;

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
     * Set description
     *
     * @param string $description
     *
     * @return DiscussionComments
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
     * @return DiscussionComments
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
     * Set discussion
     *
     * @param \ProjectManagerBundle\Entity\Discussions $discussion
     *
     * @return DiscussionComments
     */
    public function setDiscussion(\ProjectManagerBundle\Entity\Discussions $discussion = null)
    {
        $this->discussion = $discussion;

        return $this;
    }

    /**
     * Get discussion
     *
     * @return \ProjectManagerBundle\Entity\Discussions
     */
    public function getDiscussion()
    {
        return $this->discussion;
    }

    /**
     * Set user
     *
     * @param \ProjectManagerBundle\Entity\Users $user
     *
     * @return DiscussionComments
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
     * @return DiscussionComments
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

