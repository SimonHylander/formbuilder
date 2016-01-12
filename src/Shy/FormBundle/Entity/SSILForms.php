<?php

namespace Shy\FormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * SSILForms
 *
 * @ORM\Table(name="ssil_forms")
 * @ORM\Entity
 */
class SSILForms
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
     * @var string
     *
     * @ORM\Column(name="form_name", type="string", length=50)
     */
    private $formName;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_from", type="string", length=50)
     */
    private $mailFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_to", type="string", length=50)
     */
    private $mailTo;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_cc", type="string", length=50)
     */
    private $mailCc;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_bcc", type="string", length=50)
     */
    private $mailBcc;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="confirm_text", type="string", length=255)
     */
    private $confirmText;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=255)
     */
    private $theme;

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
     * @ManyToOne(targetEntity="SSILFormComponents")
     * @JoinColumn(name="id", referencedColumnName="ssil_form_id")
     */
    private $form_components;


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
     * Set formName
     *
     * @param string $formName
     *
     * @return SSILForms
     */
    public function setFormName($formName)
    {
        $this->formName = $formName;

        return $this;
    }

    /**
     * Get formName
     *
     * @return string
     */
    public function getFormName()
    {
        return $this->formName;
    }

    /**
     * Set mailFrom
     *
     * @param string $mailFrom
     *
     * @return SSILForms
     */
    public function setMailFrom($mailFrom)
    {
        $this->mailFrom = $mailFrom;

        return $this;
    }

    /**
     * Get mailFrom
     *
     * @return string
     */
    public function getMailFrom()
    {
        return $this->mailFrom;
    }

    /**
     * Set mailTo
     *
     * @param string $mailTo
     *
     * @return SSILForms
     */
    public function setMailTo($mailTo)
    {
        $this->mailTo = $mailTo;

        return $this;
    }

    /**
     * Get mailTo
     *
     * @return string
     */
    public function getMailTo()
    {
        return $this->mailTo;
    }

    /**
     * Set mailCc
     *
     * @param string $mailCc
     *
     * @return SSILForms
     */
    public function setMailCc($mailCc)
    {
        $this->mailCc = $mailCc;

        return $this;
    }

    /**
     * Get mailCc
     *
     * @return string
     */
    public function getMailCc()
    {
        return $this->mailCc;
    }

    /**
     * Set mailBcc
     *
     * @param string $mailBcc
     *
     * @return SSILForms
     */
    public function setMailBcc($mailBcc)
    {
        $this->mailBcc = $mailBcc;

        return $this;
    }

    /**
     * Get mailBcc
     *
     * @return string
     */
    public function getMailBcc()
    {
        return $this->mailBcc;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return SSILForms
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set confirmText
     *
     * @param string $confirmText
     *
     * @return SSILForms
     */
    public function setConfirmText($confirmText)
    {
        $this->confirmText = $confirmText;

        return $this;
    }

    /**
     * Get confirmText
     *
     * @return string
     */
    public function getConfirmText()
    {
        return $this->confirmText;
    }

    /**
     * Set theme
     *
     * @param string $theme
     *
     * @return SSILForms
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set cdate
     *
     * @param \DateTime $cdate
     *
     * @return SSILForms
     */
    public function setCdate($cdate)
    {
        $this->cdate = $cdate;

        return $this;
    }

    /**
     * Get cdate
     *
     * @return \DateTime
     */
    public function getCdate()
    {
        return $this->cdate;
    }

    /**
     * Set udate
     *
     * @param \DateTime $udate
     *
     * @return SSILForms
     */
    public function setUdate($udate)
    {
        $this->udate = $udate;

        return $this;
    }

    /**
     * Get udate
     *
     * @return \DateTime
     */
    public function getUdate()
    {
        return $this->udate;
    }
}

