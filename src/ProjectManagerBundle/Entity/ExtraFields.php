<?php

namespace ProjectManagerBundle\Entity;

/**
 * ExtraFields
 */
class ExtraFields
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
    private $bindType = '';

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $sortOrder = '0';

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var boolean
     */
    private $displayInList;


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
     * @return ExtraFields
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
     * Set bindType
     *
     * @param string $bindType
     *
     * @return ExtraFields
     */
    public function setBindType($bindType)
    {
        $this->bindType = $bindType;

        return $this;
    }

    /**
     * Get bindType
     *
     * @return string
     */
    public function getBindType()
    {
        return $this->bindType;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return ExtraFields
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return ExtraFields
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
     * Set active
     *
     * @param boolean $active
     *
     * @return ExtraFields
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set displayInList
     *
     * @param boolean $displayInList
     *
     * @return ExtraFields
     */
    public function setDisplayInList($displayInList)
    {
        $this->displayInList = $displayInList;

        return $this;
    }

    /**
     * Get displayInList
     *
     * @return boolean
     */
    public function getDisplayInList()
    {
        return $this->displayInList;
    }
}

