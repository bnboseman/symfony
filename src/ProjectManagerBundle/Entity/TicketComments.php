<?php

namespace ProjectManagerBundle\Entity;

/**
 * TicketComments
 */
class TicketComments
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
     * @var \ProjectManagerBundle\Entity\Tickets
     */
    private $ticket;

    /**
     * @var \ProjectManagerBundle\Entity\Users
     */
    private $user;

    /**
     * @var \ProjectManagerBundle\Entity\TicketStatus
     */
    private $ticketStatus;


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
     * @return TicketComments
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
     * @return TicketComments
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
     * Set ticket
     *
     * @param \ProjectManagerBundle\Entity\Tickets $ticket
     *
     * @return TicketComments
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
     * Set user
     *
     * @param \ProjectManagerBundle\Entity\Users $user
     *
     * @return TicketComments
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
     * Set ticketStatus
     *
     * @param \ProjectManagerBundle\Entity\TicketStatus $ticketStatus
     *
     * @return TicketComments
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
}

