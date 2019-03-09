<?php

declare(strict_types=1);

namespace Lalala\Movie\UseCase;

class MovieRegisterInputData
{
    /**
     * @var string
     */
    public $movieTitle;
    /**
     * @var int
     */
    public $screeningTime;

    /**
     * MovieRegisterData constructor.
     * @param string $movieTitle
     * @param int $screeningTime
     */
    public function __construct(string $movieTitle, int $screeningTime)
    {
        $this->movieTitle = $movieTitle;
        $this->screeningTime = $screeningTime;
    }
}
