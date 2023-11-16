<?php


namespace App\Services\Cars\CarsDTO;


class SpecMachine extends BaseCar
{
    public const TYPE = 'spec_machine';
    /**
     * SpecMachine constructor.
     * @param string $photoFileName
     * @param float $carrying
     * @param string $brand
     * @param string $extra
     * @param string $carType
     */
    public function __construct( public string $photoFileName,
                                 public $carrying,
                                 public string $brand,
                                 public string $extra,
                                 private string $carType = self::TYPE

    ) {
        parent::__construct($this->photoFileName, $this->carrying, $this->brand, $this->carType);
    }

}
