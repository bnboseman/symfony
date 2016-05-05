<?php

namespace ProjectManagerBundle\Entity;

/**
 * ExtraFieldList
 */
class ExtraFieldList
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $bindId = '0';

    /**
     * @var string
     */
    private $value;

    /**
     * @var \ProjectManagerBundle\Entity\ExtraFields
     */
    private $extraField;


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
     * Set bindId
     *
     * @param integer $bindId
     *
     * @return ExtraFieldList
     */
    public function setBindId($bindId)
    {
        $this->bindId = $bindId;

        return $this;
    }

    /**
     * Get bindId
     *
     * @return integer
     */
    public function getBindId()
    {
        return $this->bindId;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return ExtraFieldList
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set extraField
     *
     * @param \ProjectManagerBundle\Entity\ExtraFields $extraField
     *
     * @return ExtraFieldList
     */
    public function setExtraField(\ProjectManagerBundle\Entity\ExtraFields $extraField = null)
    {
        $this->extraField = $extraField;

        return $this;
    }

    /**
     * Get extraField
     *
     * @return \ProjectManagerBundle\Entity\ExtraFields
     */
    public function getExtraField()
    {
        return $this->extraField;
    }
}

