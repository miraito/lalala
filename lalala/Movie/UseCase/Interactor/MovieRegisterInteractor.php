<?php
declare(strict_types=1);

namespace Lalala\Movie\UseCase\Interactor;

use Lalala\Movie\Domain\Movie;
use Lalala\Movie\Domain\MovieId;
use Lalala\Movie\Domain\MovieTitle;
use Lalala\Movie\Domain\ScreeningTime;
use Lalala\Movie\UseCase\GateWay\MovieRepository;
use Lalala\Movie\UseCase\InputPort\MovieRegister;
use Lalala\Movie\UseCase\MovieRegisteredOutputData;
use Lalala\Movie\UseCase\MovieRegisterInputData;
use Lalala\Movie\UseCase\OutPutPort\MovieRegisteredResult;

class MovieRegisterInteractor implements MovieRegister
{
    /**
     * @var MovieRepository
     */
    private $movieRepository;
    /**
     * @var MovieRegisteredResult
     */
    private $registeredResult;

    public function __construct(
        MovieRepository $movieRepository,
        MovieRegisteredResult $registeredResult
    ) {
        $this->movieRepository = $movieRepository;
        $this->registeredResult = $registeredResult;
    }
    
    public function register(
        MovieRegisterInputData $registerData
    ): MovieRegisteredResult {
        $entity = new Movie(
            new MovieId($this->movieRepository->identifier()),
            new MovieTitle($registerData->movieTitle),
            new ScreeningTime($registerData->screeningTime)
        );

        $movieId = $this->movieRepository->save($entity);

        $this->registeredResult->bridge(new MovieRegisteredOutputData($movieId->getId()));
        return $this->registeredResult;
    }
}
