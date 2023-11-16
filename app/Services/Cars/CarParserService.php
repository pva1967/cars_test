<?php


namespace App\Services\Cars;

use App\Services\Cars\CarsDTO\BaseCar;
use App\Services\Cars\CarsDTO\Car;
use App\Services\Cars\CarsDTO\Truck;
use App\Services\Cars\CarsDTO\SpecMachine;


class CarParserService
{
    protected const SEPARATOR =";";
    public function getCarList(string $fileNameWithPath): array
    {
        $cars = [];

        $file = $this->openCsvFile($fileNameWithPath);
        $headers =  fgetcsv($file, null, self::SEPARATOR);
        while ($rowData = fgetcsv($file, null, self::SEPARATOR)) {
            try {
                $cars[] = $this->createCarsType($rowData);
            }
            catch (\RuntimeException $e) {
                //ignore missing data
            }
        }

        $this->closeCsvFile($file);

        return $cars;
    }

    private function openCsvFile(string $fileNameWithPath)
    {
        return fopen('php://stdin', 'r') ?? throw new \RuntimeException("Cannot read file {$fileNameWithPath}");
    }

    public function closeCsvFile($file): void
    {
        fclose($file);
    }
    private function createCarsType(array $data)
    {

       switch ($data[0]){
           case Car::TYPE:
               return new Car($data[3], $data[5], $data[1], $data[2]);
           case Truck::TYPE:
               return new Truck($data[3], $data[5], $data[1], $data[4]);
           case SpecMachine::TYPE:
               return new SpecMachine($data[3], $data[5], $data[1], $data[6]);
           default:
               throw new \RuntimeException("Unsupported type {$data[0]}");

       }
    }
}
