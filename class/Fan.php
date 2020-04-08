<?php

/*  class Fan
-------------------
 * - SLOW = 1
 * - MEDIUM = 2
 * - FAST = 3
 * - private speed(SLOW): int
 * - private on(false): boolean
 * - private radius(5): int
 * - private color("blue"): str
-------------------
 * + setter()
 * + getter()
 * + __constructor()
 * + toString(): str
*/

class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private  $speed;
    private  $on;
    private  $radius;
    private  $color;


    public function __construct($speed =self::SLOW, $on = false, $radius = 5, $color = "blue")
    {
        $this->speed = $speed;
        $this->on = $on;
        $this->radius = $radius;
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param bool $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return bool
     */
    public function isOn()
    {
        return $this->on;
    }

    public function toString()
    {
        if ($this->isOn()) {
            return "Fan is on, speed: " . $this->getSpeed() . ", color: " . $this->getColor() . ", radius: " . $this->getRadius();
        } else
            return "Fan is off, speed: " . $this->getSpeed() . ", color: " . $this->getColor() . ", radius: " . $this->getRadius();
    }
}