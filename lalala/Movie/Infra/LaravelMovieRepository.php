<?php

namespace Lalala\Movie\Infra;

use App\Model\Movie;
use Lalala\Movie\Domain\MovieId;
use Lalala\Movie\UseCase\GateWay\MovieRepository;
use Lalala\Movie\Domain\Movie as DomainMovie;
class LaravelMovieRepository implements MovieRepository
{
    public function identifier(): string
    {
        return '550e8400-e29b-41d4-a716-446655440000';
    }

    public function save(DomainMovie $movie): MovieId
    {
        $movieModel = new Movie();
        $movieModel->movie_uuid = $movie->getId()->getId();
        $movieModel->title = $movie->getTitle()->getTitle();
        $movieModel->screening_time = $movie->getScreeningTime()->getScreeningTime();

        $movieModel->save();

        return new MovieId($movieModel->movie_uuid);
    }


}
