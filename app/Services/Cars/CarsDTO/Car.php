<?php


namespace App\Services\Cars\CarsDTO;


class Car extends BaseCar
{
    public const TYPE = 'car';
    /**
     * Car constructor.
     * @param string $photoFileName
     * @param float $carrying
     * @param string $brand
     * @param string $carType
     * @param int $passengerSeatsCount
     */
    public function __construct(public string $photoFileName,
                                public $carrying,
                                public string $brand,
                                public $passengerSeatsCount,
                                private string $carType = self::TYPE

    )
    {
        parent::__construct($this->photoFileName, $this->carrying, $this->brand, $this->carType);
        $this->passengerSeatsCount = intval($passengerSeatsCount);
    }

}
