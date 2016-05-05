<?php

namespace ProjectManagerBundle\Entity;

/**
 * Phases
 */
class Phases
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
    private $defaultValues;


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
     * @return Phases
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
     * Set defaultValues
     *
     * @param string $defaultValues
     *
     * @return Phases
     */
    public function setDefaultValues($defaultValues)
    {
        $this->defaultValues = $defaultValues;

        return $this;
    }

    /**
     * Get defaultValues
     *
     * @return string
     */
    public function getDefaultValues()
    {
        return $this->defaultValues;
    }
}

