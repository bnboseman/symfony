<?php

namespace ProjectManagerBundle\Entity;

/**
 * UserGroups
 */
class UserGroups
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
    private $allowViewAll;

    /**
     * @var boolean
     */
    private $allowManageProjects;

    /**
     * @var boolean
     */
    private $allowManageTasks;

    /**
     * @var boolean
     */
    private $allowManageTickets;

    /**
     * @var boolean
     */
    private $allowManageUsers;

    /**
     * @var boolean
     */
    private $allowManageConfiguration;

    /**
     * @var boolean
     */
    private $allowManageTaskViewonly;

    /**
     * @var boolean
     */
    private $allowManageDiscussions;

    /**
     * @var boolean
     */
    private $allowManageDiscussionViewonly;


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
     * @return UserGroups
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
     * Set allowViewAll
     *
     * @param boolean $allowViewAll
     *
     * @return UserGroups
     */
    public function setAllowViewAll($allowViewAll)
    {
        $this->allowViewAll = $allowViewAll;

        return $this;
    }

    /**
     * Get allowViewAll
     *
     * @return boolean
     */
    public function getAllowViewAll()
    {
        return $this->allowViewAll;
    }

    /**
     * Set allowManageProjects
     *
     * @param boolean $allowManageProjects
     *
     * @return UserGroups
     */
    public function setAllowManageProjects($allowManageProjects)
    {
        $this->allowManageProjects = $allowManageProjects;

        return $this;
    }

    /**
     * Get allowManageProjects
     *
     * @return boolean
     */
    public function getAllowManageProjects()
    {
        return $this->allowManageProjects;
    }

    /**
     * Set allowManageTasks
     *
     * @param boolean $allowManageTasks
     *
     * @return UserGroups
     */
    public function setAllowManageTasks($allowManageTasks)
    {
        $this->allowManageTasks = $allowManageTasks;

        return $this;
    }

    /**
     * Get allowManageTasks
     *
     * @return boolean
     */
    public function getAllowManageTasks()
    {
        return $this->allowManageTasks;
    }

    /**
     * Set allowManageTickets
     *
     * @param boolean $allowManageTickets
     *
     * @return UserGroups
     */
    public function setAllowManageTickets($allowManageTickets)
    {
        $this->allowManageTickets = $allowManageTickets;

        return $this;
    }

    /**
     * Get allowManageTickets
     *
     * @return boolean
     */
    public function getAllowManageTickets()
    {
        return $this->allowManageTickets;
    }

    /**
     * Set allowManageUsers
     *
     * @param boolean $allowManageUsers
     *
     * @return UserGroups
     */
    public function setAllowManageUsers($allowManageUsers)
    {
        $this->allowManageUsers = $allowManageUsers;

        return $this;
    }

    /**
     * Get allowManageUsers
     *
     * @return boolean
     */
    public function getAllowManageUsers()
    {
        return $this->allowManageUsers;
    }

    /**
     * Set allowManageConfiguration
     *
     * @param boolean $allowManageConfiguration
     *
     * @return UserGroups
     */
    public function setAllowManageConfiguration($allowManageConfiguration)
    {
        $this->allowManageConfiguration = $allowManageConfiguration;

        return $this;
    }

    /**
     * Get allowManageConfiguration
     *
     * @return boolean
     */
    public function getAllowManageConfiguration()
    {
        return $this->allowManageConfiguration;
    }

    /**
     * Set allowManageTaskViewonly
     *
     * @param boolean $allowManageTaskViewonly
     *
     * @return UserGroups
     */
    public function setAllowManageTaskViewonly($allowManageTaskViewonly)
    {
        $this->allowManageTaskViewonly = $allowManageTaskViewonly;

        return $this;
    }

    /**
     * Get allowManageTaskViewonly
     *
     * @return boolean
     */
    public function getAllowManageTaskViewonly()
    {
        return $this->allowManageTaskViewonly;
    }

    /**
     * Set allowManageDiscussions
     *
     * @param boolean $allowManageDiscussions
     *
     * @return UserGroups
     */
    public function setAllowManageDiscussions($allowManageDiscussions)
    {
        $this->allowManageDiscussions = $allowManageDiscussions;

        return $this;
    }

    /**
     * Get allowManageDiscussions
     *
     * @return boolean
     */
    public function getAllowManageDiscussions()
    {
        return $this->allowManageDiscussions;
    }

    /**
     * Set allowManageDiscussionViewonly
     *
     * @param boolean $allowManageDiscussionViewonly
     *
     * @return UserGroups
     */
    public function setAllowManageDiscussionViewonly($allowManageDiscussionViewonly)
    {
        $this->allowManageDiscussionViewonly = $allowManageDiscussionViewonly;

        return $this;
    }

    /**
     * Get allowManageDiscussionViewonly
     *
     * @return boolean
     */
    public function getAllowManageDiscussionViewonly()
    {
        return $this->allowManageDiscussionViewonly;
    }
}

