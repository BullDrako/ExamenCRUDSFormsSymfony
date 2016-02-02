<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints As Assert;

/**
 * AAAA
 *
 * @ORM\Table(name="a_a_a_a")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AAAARepository")
 * @ORM\HasLifecycleCallbacks()
 */
class AAAA
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="aaaa1", type="string", length=255)
     */
    private $aaaa1;

    /**
     * @var string
     *
     * @ORM\Column(name="aaaa2", type="string", length=255)
     */
    private $aaaa2;

    /**
     * @var string
     *
     * @ORM\Column(name="aaaa3", type="string", length=255)
     */
    private $aaaa3;

    /**
     * @var string
     *
     * @ORM\Column(name="aaaa4", type="string", length=255)
     */
    private $aaaa4;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;


    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = $this->createdAt;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set aaaa1
     *
     * @param string $aaaa1
     *
     * @return AAAA
     */
    public function setAaaa1($aaaa1)
    {
        $this->aaaa1 = $aaaa1;

        return $this;
    }

    /**
     * Get aaaa1
     *
     * @return string
     */
    public function getAaaa1()
    {
        return $this->aaaa1;
    }

    /**
     * Set aaaa2
     *
     * @param string $aaaa2
     *
     * @return AAAA
     */
    public function setAaaa2($aaaa2)
    {
        $this->aaaa2 = $aaaa2;

        return $this;
    }

    /**
     * Get aaaa2
     *
     * @return string
     */
    public function getAaaa2()
    {
        return $this->aaaa2;
    }

    /**
     * Set aaaa3
     *
     * @param string $aaaa3
     *
     * @return AAAA
     */
    public function setAaaa3($aaaa3)
    {
        $this->aaaa3 = $aaaa3;

        return $this;
    }

    /**
     * Get aaaa3
     *
     * @return string
     */
    public function getAaaa3()
    {
        return $this->aaaa3;
    }

    /**
     * Set aaaa4
     *
     * @param string $aaaa4
     *
     * @return AAAA
     */
    public function setAaaa4($aaaa4)
    {
        $this->aaaa4 = $aaaa4;

        return $this;
    }

    /**
     * Get aaaa4
     *
     * @return string
     */
    public function getAaaa4()
    {
        return $this->aaaa4;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Cosa
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Cosa
     */
    public function setUpdatedAt()
    {
        $this->updatedAt = new \DateTime();

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

