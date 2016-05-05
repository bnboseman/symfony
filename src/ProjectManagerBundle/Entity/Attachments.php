<?php

namespace ProjectManagerBundle\Entity;

/**
 * Attachments
 */
class Attachments
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $bindType = '';

    /**
     * @var integer
     */
    private $bindId = '0';

    /**
     * @var string
     */
    private $file;

    /**
     * @var string
     */
    private $info;


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
     * Set bindType
     *
     * @param string $bindType
     *
     * @return Attachments
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
     * Set bindId
     *
     * @param integer $bindId
     *
     * @return Attachments
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
     * Set file
     *
     * @param string $file
     *
     * @return Attachments
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return Attachments
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }
}

