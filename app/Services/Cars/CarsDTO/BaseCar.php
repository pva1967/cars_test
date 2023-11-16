<?php

namespace App\Services\Cars\CarsDTO;


/**
 * Class BaseCar
 * @package App\Cars
 */
abstract class BaseCar
{
    /**
     * BaseCar constructor.
     * @param string $photoFileName
     * @param float $carrying
     * @param string $brand
     */
    public function __construct(public string $photoFileName,
                                public $carrying,
                                public string $brand)
    {
        $this->carrying = floatval($carrying);
    }

    /**
     * @return mixed
     */
    public function getCarType() {
        return $this->carType;
    }


}
