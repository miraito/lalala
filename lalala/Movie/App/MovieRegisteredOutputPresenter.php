<?php

declare(strict_types=1);

namespace Lalala\Movie\App;

use Lalala\Movie\UseCase\MovieRegisteredOutputData;
use Lalala\Movie\UseCase\OutPutPort\MovieRegisteredResult;

class MovieRegisteredOutputPresenter implements MovieRegisteredResult
{
    /**
     * @var MovieRegisteredOutputData
     */
    private $result;

    /**
     * @param MovieRegisteredOutputData $outputData
     */
    public function bridge(MovieRegisteredOutputData $outputData):void
    {
        $this->result = $outputData;
    }

    public function viewModel(): MovieRegisteredViewModel
    {
        return new MovieRegisteredViewModel($this->result->getMovieId());
    }
}
