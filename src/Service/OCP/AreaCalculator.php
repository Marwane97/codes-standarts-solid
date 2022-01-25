<?php
/**
 * Created by PHPStorm.
 * User: Marwane Tchassama
 * Date: 26.01.2022
 * Time: 02:12
 */

namespace App\Service\OCP;

class AreaCalculator
{
    public function __construct(protected array $shapes=[]){}

    public function getTotalArea(): float|int
    {
        $totalArea = 0;
        /** @var ShapeInterface $shape */
        foreach ($this->shapes as $shape) {
            $totalArea += $shape->getArea();
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