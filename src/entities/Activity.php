<?php

namespace Nekonyx\RYWT\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="activity")
 */
class Activity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    // number of pushes
    /**
     * @ORM\Column(type="integer")
     */
    private $pushUps;

    /**
     * @ORM\Column(type="integer")
     */
    private $duration;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    // constructor
    public function __construct()
    {
    }

    // getters and setters
    public function getId()
    {
        return $this->id;
    }

    public function getPushUps()
    {
        return $this->pushUps;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function getDate()
    {
        return $this->date;
    }

    // setters
    public function setPushUps($pushUps)
    {
        $this->pushUps = $pushUps;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
}