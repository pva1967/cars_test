<?php

namespace App\Console\Commands;

use App\Services\Cars;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class GetCarListCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:print-cars-list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Output cars list';

    /**
     * Execute the console command.
     */
    public function handle(Cars\CarParserService $carParserService)
    {
        //dd(file_get_contents('php://stdin'));
        $carList = $carParserService->getCarList('php://stdin');
       foreach ($carList as $car) {
           $this->info(implode(";", collect($car)->toArray()));
       }
    }
}
