<?php
/**
 * Created by PHPStorm.
 * User: Marwane Tchassama
 * Date: 26.01.2022
 * Time: 01:29
 */

namespace App\Service\OCP;

class Square implements ShapeInterface
{
    public function __construct(protected float $length){}

    public function getArea(): float|object|int
    {
        return pow($this->length, 2);
    }

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @param float $length
     * @return Square
     */
    public function setLength(float $length): Square
    {
        $this->length = $length;

        return $this;
    }
}