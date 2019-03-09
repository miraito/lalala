<?php
declare(strict_types=1);

namespace Lalala\Movie\UseCase;

class MovieRegisteredOutputData
{
    /**
     * @var string
     */
    private $movieId;

    /**
     * @return string
     */
    public function getMovieId(): string
    {
        return $this->movieId;
    }

    public function __construct(string $movieId)
    {
        $this->movieId = $movieId;
    }
}
