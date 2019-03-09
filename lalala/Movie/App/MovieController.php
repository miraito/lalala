<?php

declare(strict_types=1);

namespace Lalala\Movie\App;

use Lalala\Movie\UseCase\InputPort\MovieRegister;
use Lalala\Movie\UseCase\MovieRegisterInputData;

class MovieController
{
    /**
     * @var MovieRegister
     */
    private $movieRegister;

    public function __construct(MovieRegister $movieRegister)
    {
        $this->movieRegister = $movieRegister;
    }

    public function register(string $movieTitle, int $screeningTime): MovieRegisteredViewModel
    {
        $presenter =  $this->movieRegister->register(new MovieRegisterInputData(
            $movieTitle,
            $screeningTime
        ));

        return $presenter->viewModel();
    }
}
