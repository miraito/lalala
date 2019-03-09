<?php

namespace Lalala\Movie\App;


class MovieRegisteredViewModel
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
