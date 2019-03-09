<?php

namespace Lalala\Movie\UseCase\OutPutPort;


use Lalala\Movie\App\MovieRegisteredViewModel;
use Lalala\Movie\UseCase\MovieRegisteredOutputData;

interface MovieRegisteredResult
{
    public function bridge(MovieRegisteredOutputData $outputData): void ;

    public function viewModel(): MovieRegisteredViewModel;
}
