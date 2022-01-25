<?php
/**
 * Created by PHPStorm.
 * User: Marwane Tchassama
 * Date: 26.01.2022
 * Time: 01:59
 */

namespace App\Service\SRP;

class AreaCalculatorOutputter // 2.
{
    public function __construct(protected AreaCalculator $areaCalculator){}

    public function toJSON(): bool|string
    {
        return json_encode([
            'total' => $this->areaCalculator->getTotalArea(),
        ]);
    }

    public function toHTML(): string
    {
        return sprintf('Sum of the areas of provided shapes: %f', $this->areaCalculator->getTotalArea());
    }

    /**
     * @return AreaCalculator
     */
    public function getAreaCalculator(): AreaCalculator
    {
        return $this->areaCalculator;
    }

    /**
     * @param AreaCalculator $areaCalculator
     * @return AreaCalculatorOutputter
     */
    public function setAreaCalculator(AreaCalculator $areaCalculator): AreaCalculatorOutputter
    {
        $this->areaCalculator = $areaCalculator;
        return $this;
    }
}