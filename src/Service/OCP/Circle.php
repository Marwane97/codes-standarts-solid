<?php
/**
 * Created by PHPStorm.
 * User: Marwane Tchassama
 * Date: 26.01.2022
 * Time: 02:11
 */

namespace App\Service\OCP;

class Circle implements ShapeInterface
{
    public function __construct(protected float $radius){}

    public function getArea(): float|int
    {
        return pi() * pow($this->radius, 2);
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     * @return Circle
     */
    public function setRadius(float $radius): Circle
    {
        $this->radius = $radius;
        return $this;
    }
}