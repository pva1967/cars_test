<?php


namespace App\Services\Cars\CarsDTO;

/**
 * Class Truck
 * @package App\Cars
 */
class Truck extends BaseCar
{
    public const TYPE = 'truck';

    private float $bodyLength;
    private float $bodyWidth;
    private float $bodyHeight;


    public function __construct(public string $photoFileName,
                                public $carrying,
                                public string $brand,
                                public string $body_whl = '',
                                private string $carType = self::TYPE
                                )
    {
        parent::__construct($this->photoFileName, $this->carrying, $this->brand, $this->carType);
        list($this->bodyLength, $this->bodyWidth, $this->bodyHeight) = $this->body_whl ?
            array_map(function ($a) {
                return floatval($a);
            }, explode('x', $this->body_whl)) : [0, 0, 0];

    }

    /**
     * @return float
     */
    public function getBodyVolume(): float
    {
        return $this->bodyLength * $this->bodyWidth * $this->bodyHeight;
    }

}
