<?php
/**
 * Created by PHPStorm.
 * User: Marwane Tchassama
 * Date: 26.01.2022
 * Time: 01:30
 */

namespace App\Service\SRP;

class AreaCalculator
{
    public function __construct(protected array $shapes=[]){}

    public function getTotalArea(): float|int
    {
        $totalArea = 0;
        foreach ($this->shapes as $shape) {
            if ($shape instanceof Square) {
                $totalArea += pow($shape->getLength(), 2);
            } elseif ($shape instanceof Circle) {
                $totalArea += pi() * pow($shape->getRadius(), 2);
            }
        }

        return $totalArea;
    }

    public function printTotalArea(): string // 1.
    {
        return sprintf('Sum of the areas of provided shapes: %f', $this->getTotalArea());
    }

    /**
     * @return array
     */
    public function getShapes(): array
    {
        return $this->shapes;
    }

    /**
     * @param array $shapes
     * @return AreaCalculator
     */
    public function setShapes(array $shapes): AreaCalculator
    {
        $this->shapes = $shapes;

        return $this;
    }
}