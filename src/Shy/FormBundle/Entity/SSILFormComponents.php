<?php

namespace Shy\FormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SSILFormComponent
 *
 * @ORM\Table(name="ssil_form_components")
 * @ORM\Entity
 */
class SSILFormComponents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ssil_form_id", type="integer")
     */
    private $ssilFormId;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=50)
     */
    private $labelName;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=15)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=25)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="attributes", type="string", length=255)
     */
    private $attributes;

    /**
     * @var integer
     *
     * @ORM\Column(name="row", type="integer")
     */
    private $row;

    /**
     * @var integer
     *
     * @ORM\Column(name="row_column", type="integer")
     */
    private $rowColumn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cdate", type="datetimetz")
     */
    private $cdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="udate", type="datetime")
     */
    private $udate;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getSsilFormId()
    {
        return $this->ssilFormId;
    }

    /**
     * @param int $ssilFormId
     */
    public function setSsilFormId($ssilFormId)
    {
        $this->ssilFormId = $ssilFormId;
    }

    /**
     * @return string
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * @param string $labelName
     */
    public function setLabelName($labelName)
    {
        $this->labelName = $labelName;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param string $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * @return int
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * @param int $row
     */
    public function setRow($row)
    {
        $this->row = $row;
    }

    /**
     * @return int
     */
    public function getRowColumn()
    {
        return $this->rowColumn;
    }

    /**
     * @param int $rowColumn
     */
    public function setRowColumn($rowColumn)
    {
        $this->rowColumn = $rowColumn;
    }

    /**
     * @return \DateTime
     */
    public function getCdate()
    {
        return $this->cdate;
    }

    /**
     * @param \DateTime $cdate
     */
    public function setCdate($cdate)
    {
        $this->cdate = $cdate;
    }

    /**
     * @return \DateTime
     */
    public function getUdate()
    {
        return $this->udate;
    }

    /**
     * @param \DateTime $udate
     */
    public function setUdate($udate)
    {
        $this->udate = $udate;
    }



}

